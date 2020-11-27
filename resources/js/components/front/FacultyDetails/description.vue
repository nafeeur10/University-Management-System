<template>
    <div class="container">
        <div class="right_holder">
            <h1 class="title" v-if="$store.getters.getLanguage == 'eng'">
                {{ facultyDetails.faculty_details_title }}
            </h1>
            <h1 class="title" v-else>
                {{ facultyDetails.faculty_details_title_arabic }}
            </h1>
            <div class="desc" v-if="$store.getters.getLanguage == 'eng'">
                {{ facultyDetails.faculty_details_description }}
            </div>
            <div class="desc" v-else>
                {{ facultyDetails.faculty_details_description_arabic }}
            </div>
            <a :href="'/pdf/' + facultyDetails.faculty_details_student_guide" target="_blank" class="btn life">Students Guide</a>
            <a :href="'/pdf/' + facultyDetails.faculty_details_organizational_structure" target="_blank" class="btn life">Organizational Structure</a>
            <a :href="'/pdf/' + facultyDetails.faculty_details_course" target="_blank" class="btn life">Courses</a>
        </div>
    </div>
</template>
<script>
export default {
   props: ['facultyDetails'],
   data() {
       return {}
   }
}
</script>

<style scoped lang="sass">

.right_holder
    padding: 0px 200px 56px 200px
    text-align: center
    .title
        color: #c20000
        font-weight: bold
    .desc
        color: #777
    .life, .us
        background: #c20000
        color: #fff
        padding: 7px 21px
        border-radius: 0
        text-transform: uppercase
        font-weight: bold
        font-size: 15px
        border: #c20000 2px solid
        margin: 31px 29px 0 0
        transition: all .3s ease-in-out
    .us
        border-color: #304770
        background-color: #304770
    .life:hover
        background-color: #fff
        color: #c20000
    .us:hover
        background-color: #fff
        color: #304770


</style>
