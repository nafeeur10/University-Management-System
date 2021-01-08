<template>
  <div class="container service" v-if="allStaff.length > 0">
    <h1 v-if="$store.getters.getLanguage == 'eng'">DEPARTMENT BOARD MEMBERS</h1>
    <h1 v-else>أعضاء مجلس الإدارة</h1>
    <h4 v-if="$store.getters.getLanguage == 'eng'">
      {{ dept_name }} Major Staff
    </h4>
    <h4 v-else>{{ dept_name }} كبار الموظفين</h4>
    <br><br>
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;" v-for="staff in allStaff" :key="staff.id">
                    <h3 v-if="$store.getters.getLanguage == 'eng'">{{ staff.staff_name }}</h3>
                    <h3 v-else>{{ staff.staff_name }}</h3>
                    <button v-if="$store.getters.getLanguage == 'eng'" class="btn-staff" type="submit">
                        <a :href="'/images/staff/' + staff.staff_resume" class="text-white text-decoration-none" target="_blank">{{ staff.staff_designation }}</a>
                    </button>
                    <button v-else class="btn-staff" type="submit">
                        <a :href="'/images/staff/' + staff.staff_resume" class="text-white text-decoration-none" target="_blank">{{ staff.staff_designation_arabic }}</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
      
  </div>
</template>
<script>
export default {
    props: ['id', 'dept_name'],
    data() {
        return {
            allStaff: []
        }
    },
    methods: {
        getAllStaff() {
            this.$http.get('/api/getallstaff/' + this.id)
            .then( (res) => {
                this.allStaff = res.data.allstaff
            }).catch( (err) => {
                alert("Something wrong in Welcome Info. Please Check.");
            })
        }
    },
    created() {
        this.getAllStaff();
    }
}
</script>


<style scoped lang="sass">

.no-padding
  padding: 0
.service
  margin-bottom: 50px
  text-align: center
  h1
    font-weight: bolder
    color: #c20000
    h6
      padding: 0 220px
      color: #333

  .staffHolder
    overflow: hidden
    position: relative
    border-radius: 15px
  .staffHolder::before
    position: absolute
    content: ""
    top: 0px
    left: 0px
    background: -webkit-gradient(linear, left bottom, left top, from(#000), color-stop(60%, rgba(39, 60, 102, 0)))
    background: -o-linear-gradient(bottom, #000 0%, rgba(39, 60, 102, 0) 60%)
    background: linear-gradient(0deg, #000 0%, rgba(39, 60, 102, 0) 60%)
    width: 100%
    height: 100%
  .staff
    transform: scale(1.11)
    transition: all 0.3s ease-in-out
  .staff h5, .staff small
    color: #fff
  .staff h5
    margin: 0
    font-weight: bolder
  .staff small
    margin-bottom: 10px
    display: block
.btn-staff
  background: #c20000
  color: #fff
  padding: 6px 13px
  border-radius: 0
  text-transform: uppercase
  font-weight: bold
  font-size: 13px
  border: #c20000 2px solid
  margin: 10px 13px 0 0
  transition: all .3s ease-in-out
</style>
