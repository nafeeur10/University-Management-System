<template>
    <b-row class="justify-content-md-center">
        <b-col col lg="10">
            <article class="media">
                <span class="breaking-news media-left" v-if="$store.getters.getLanguage == 'eng'">Breaking News</span>
                <span class="breaking-news media-left" v-else>أخبار عاجلة</span>
                <div class="media-content">
                    <span class="time"></span>
                    <transition name="fade" tag="div" mode="out-in">
                        <a 
                            :href="news.news_main_link" 
                            class="news" 
                            v-for="news in newsList" 
                            :key="news.id"
                        >
                            <span v-if="$store.getters.getLanguage == 'eng'">{{ news.news_title }}</span>
                            <span class="text-right float-right" dir="rtl" v-else>{{ news.news_title_arabic }}</span>
                        </a>
                        
                    </transition>
                </div>
            </article>
        </b-col>
    </b-row>
</template>

<script>
    export default {
        data() {
           return {
               tickerLocation: 0,
               news: [
                   true,
                   false,
                   false,
               ],
               newsList: [],
               lang: null
           }
        },
        created: function() {
            setInterval(this.updateTicker, 5000);
        },
        mounted() {
            this.lang = this.$store.getters.getLanguage
            this.getNewsList();
        },
        methods: {
            updateTicker: function() {
                var removed = this.news.pop();
                this.news.unshift(removed);
            },
            getNewsList() {
                this.$http.get('api/getnews').then( (res) => {
                    //console.log("News: ", res.data.breakingnews);
                    this.newsList = res.data.breakingnews
                }).catch( (err) => {
                    alert("Something Wrong");
                })
            }
        }
    }
</script>

<style scoped >
    .media {
        min-height: 62px;
    }

    .breaking-news {
        background: linear-gradient(166deg, #c20000 50%, rgb(48 71 112) 50%);
        color: #fff;
        padding: 5px;
    }

    .media-content {
        padding: 5px;
        background: #eee;
        width: 88%;
    }

    .time {
        color: #33A3F1;
    }

    .news {
        color: #666666;
    }

    .fade-enter-active, .fade-leave-active {
        transition: opacity 1s
    }
    .fade-enter, .fade-leave-to {
        opacity: 0
    }
</style>