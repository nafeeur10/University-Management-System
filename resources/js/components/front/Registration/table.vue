<template>
  <div class="container">
    <b-table striped hover :items="items" :fields="fields">
      <template v-slot:head(Performance)="data">
        <span class>
          <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
          {{ data.label.toUpperCase() }}
        </span>
      </template>
      <template v-slot:head(min)="data">
        <span class>
          <i class="fa fa-star" aria-hidden="true"></i>
          {{ data.label.toUpperCase() }}
        </span>
      </template>
      <template v-slot:head(max)="data">
        <span class>
          <i class="fa fa-star" aria-hidden="true"></i>
          {{ data.label.toUpperCase() }}
        </span>
      </template>
      <template v-slot:head(Summer)="data">
        <span class>
          <i class="fa fa-sun-o" aria-hidden="true"></i>
          {{ data.label.toUpperCase() }}
        </span>
      </template>
    </b-table>
    <b-row class="justify-content-md-center">
        <b-col col lg="7">
            <p style="color:#777;text-align: center;">
                You may make changes to your registration within time limits indicated in the academic calendar.
                Addition of courses is allowed up to week 2 of the semester.
                Drop of courses is allowed up to week 3 of Fall/Spring, and to week 2 of Summer.
                Withdrawal from a course is allowed up to week 9 of Fall/Spring. The course grade will be “W”.</p>
        </b-col>
    </b-row>
  </div>
</template>

<script>
export default {
  data() {
    return {
      // Note 'isActive' is left out and will not appear in the rendered table
      fields: [
        {
          key: "Performance",
          sortable: true,
          thClass: "test"
        },
        {
          key: "min",
          sortable: false,
          label: "Fall/Spring ( min )",
          thClass: "test"
        },
        {
          key: "max",
          label: "Fall/Spring ( max )",
          sortable: true,
          thClass: "test"
        },
        {
          key: "Summer",
          label: "Summer",
          sortable: true,
          thClass: "test"
        }
      ],
      items: [
        {
          isActive: true,
          max: 21,
          Summer: 6,
          min: "12",
          Performance: "CGPA >= 3.33 | 2 consecutive semesters"
        },
        {
          isActive: true,
          max: 19,
          Summer: 6,
          min: "12",
          Performance: "1.7 <= CGPA < 3.33"
        },
        {
          isActive: true,
          max: 13,
          Summer: 6,
          min: "12",
          Performance: "WiCGPA < 1.7lson"
        }
      ]
    };
  }
};
</script>

<style lang="sass">
.test
    background: #C20000
    color: #fff

    
</style>