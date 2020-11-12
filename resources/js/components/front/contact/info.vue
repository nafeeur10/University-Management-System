<template>
    <div class="info">
        <h2 class="title" :class="getlang === 'arb' ? 'text-right': ''">Contact Info</h2>
        <p :class="getlang === 'arb' ? 'text-right': ''">We are glade to hear from you any time</p>
        <span></span>
        <hr>
        <div class="phone">
            <div class="left" :class="getlang === 'arb' ? 'float-right': ''">
                <div :class="getlang === 'arb' ? 'text-right': ''">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <h3>Phone</h3>
                </div>
                <p :class="getlang === 'arb' ? 'ml-2': ''">{{ contactInformation.phone }}</p>
            </div>
            <div class="right">
                <div :class="getlang === 'arb' ? 'd-block text-right': ''">
                    <i class="fa fa-fax" aria-hidden="true"></i>
                    <h3>Fax</h3>
                </div>
                <p :class="getlang === 'arb' ? 'ml-2': ''">{{ contactInformation.fax }}</p>
            </div>
        </div>
        <hr>
        <div class="phone" :class="getlang === 'arb' ? 'd-block text-right': ''">
            <div class="left">
                <i class="fa fa-phone " aria-hidden="true"></i>
                <h3>Mobile Numbers</h3>
                <p>{{ contactInformation.mobile }}</p>
                <p v-if="contactInformation.mobile_optional1 != null">{{ contactInformation.mobile_optional1 }}</p>
                <p v-if="contactInformation.mobile_optional2 != null">{{ contactInformation.mobile_optional2 }}</p>
            </div>
        </div>
        <hr>
        <div class="address" :class="getlang === 'arb' ? 'd-block text-right': ''">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <h3>Address</h3>
            <p v-if="getlang==='eng'">{{ contactInformation.address }}</p>
            <p v-else>{{ contactInformation.address_arabic }}</p>
        </div>
        <hr>


        <div class="icones" :class="getlang === 'arb' ? 'float-right': ''">
            <a v-for="social in socialLinks" :key="social.id" :href="social.link" class="mr-2">
                <i :class="social.icon" aria-hidden="true"></i>
            </a>
        </div>


        <div class="qr" :class="getlang === 'arb' ? 'float-right': ''">
            <p>Scan QR code to get direct location</p>
            <img :src="'/images/contact/'+contactInformation.qr_image" class="img-fluid" />
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            contactInformation: null,
            lang: null,
            socialLinks: []
        }
    },
    methods: {
        getContactInformation() {
            this.$http.get('api/contact/basic')
            .then( (res) => {
                this.contactInformation = res.data.contact;
            })
            .catch( (err) => {
                console.log(err);
            })
        },
        getSocialInformation() {
            this.$http.get('api/contact/socialmedia')
            .then( (res) => {
                this.socialLinks = res.data.social_medias;
            })
            .catch( (err) => {
                console.log(err);
            })
        },
        getLanguage() {
            this.lang = this.$store.getters.getLanguage;
            console.log(this.lang);
        }
    },
    mounted() {
        this.getContactInformation();
        this.getSocialInformation();
        this.getLanguage();
    },
    computed: {
        getlang() {
            return this.$store.getters.getLanguage
        }
    }
}
</script>

<style scoped lang="sass">
    .info
        padding-bottom: 55px
        color: #777
        .title
            color: #c20000
            font-weight: bolder
        p
            margin-bottom: 12px
        span
            width: 49px
            background: #c20000
            height: 3px
            display: block
            margin-bottom: 30px
        .phone .left
            // margin-right: 60px
        .phone .left, .phone .right, .address
            display: inline-block
            i
                display: inline-block
                color: #c20000
                font-weight: bolder
                font-size: 26px
            h3
                display: inline-block
                margin-left: 10px
                font-size: 20px
                color: #444
                font-weight: bolder
            p
                margin-left: 30px
        .icones
            font-size: 30px
            cursor: pointer
            .fa-facebook-square
                color: #3b5998
            .fa-twitter-square
                color: #1da1f2
            .fa-youtube-square
                color: #c20000
            .fa-linkedin
                color: #0077b5
            .fa-instagram-square
                color: #3F729B

    .qr p, .qr img
        display: inline-block
    .qr img
        width: 189px
    .qr p
        font-size: 20px
        font-weight: bolder
        color: #c20000

</style>
