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
          <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
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
          <i class="fa fa-star" aria-hidden="true"></i>
          {{ data.label.toUpperCase() }}
        </span>
      </template>
    </b-table>
    <b-row class="justify-content-md-center">
        <b-col col lg="7" class="desc">
            <p style="text-align: center;">
              Pharmacy Supplementary Courses: (*) 50 – (**) < 50 In each course, you earn a number of points.
            </p>
            <h3 style="text-align: center;">
              Earned points = Grade Point * course CH
            </h3>
            <p style="text-align: center;">
              If you repeat a failed course, the new grade will be at most C, and will replace the failing grade.
              If you repeat a passed course, the new grade will be what you obtain, and will replace the previous grade.
            </p>
        </b-col>
    </b-row>
    <dote style="margin-top: 50px" />

    <b-row >
      <b-col col lg="8" class="desc">
        <!-- 1 -->
        <h3>
          Courses Grading
        </h3>
        <p>
          GPA is a measure of your performance in all courses taken in a semester.
          <br><br>
          GPA = sum of earned points in all courses / sum of CH of all course
          (in one semester)
        </p>
          <!-- 2 -->
        <h3>
          Cumulative Grade Point Average (CGPA)
        </h3>
        <p>
          CGPA is a measure of your performance in all courses taken in all semesters up to the present semester.
          <br><br>
          CGPA = total earned points / total CH
          (of all semesters)
        </p>
          <!-- 3 -->
        <h3>
          Graduation
        </h3>
        <p>
          The minimum CGPA to graduate is 2.00.
          <br>
          A graduate with CGPA >= 3.75 is granted a first honors degree.
          <br>
          A graduate with 3.25 <= CGPA < 3.75 is granted a second honors degree.
        </p>
          <!--4-->
        <h3>
          Academic Difficulty
        </h3>
        <p>
          > If you obtain semester GPA < 1.7 you will receive a letter of Academic Warning.
          <br><br>
          > If you obtain CGPA < 1.7 you will be placed on Academic Probation.
          <br><br>
          > If you are placed on Academic Probation for 3 consecutive semesters, you will be subject to Suspension/Dismissal.
        </p>

      </b-col>

      <b-col col lg="4">
        <img src="/storage/img/tab-5 (1).jpg" />
      </b-col>
    </b-row>

    <dote style="margin-top: 50px" />

  </div>
</template>

<script>
export default {
  data() {
    return {
      // Note 'isActive' is left out and will not appear in the rendered table
      fields: [
        {
          key: "Engineering",
          label: 'Total Mark % (Engineering)',
          sortable: true,
          thClass: "test"
        },
        {
          key: "Pharmacy",
          sortable: false,
          label: "Total Mark % (Pharmacy)",
          thClass: "test"
        },
        {
          key: "Grade",
          label: "Grade",
          sortable: true,
          thClass: "test"
        },
        {
          key: "Point",
          label: "Grade Point",
          sortable: true,
          thClass: "test"
        }
      ],
      items: [
        {
          isActive: true,
          Engineering: '90-',
          Pharmacy: '90-',
          Grade: "A",
          Point: '4.00'
        },
        {
            isActive: true,
            Engineering: '85-',
            Pharmacy: '85-',
            Grade: "A-",
            Point: '3.70'
        },
        {
            isActive: true,
            Engineering: '80-',
            Pharmacy: '80-',
            Grade: "B+",
            Point: '3.30'
        },
        {
            isActive: true,
            Engineering: '75-',
            Pharmacy: '75-',
            Grade: "B",
            Point: '3.00'
        },
        {
            isActive: true,
            Engineering: '70-',
            Pharmacy: '72.5-',
            Grade: "B-",
            Point: '2.70'
        },
        {
            isActive: true,
            Engineering: '65-',
            Pharmacy: '70-',
            Grade: "C+",
            Point: '2.30'
        },
        {
            isActive: true,
            Engineering: '60-',
            Pharmacy: '67.5-',
            Grade: "C",
            Point: '2.00'
        },
        {
            isActive: true,
            Engineering: '55-',
            Pharmacy: '67.5-',
            Grade: "C",
            Point: '1.70'
        },
        {
            isActive: true,
            Engineering: '52.5-',
            Pharmacy: '62.5-',
            Grade: "D+",
            Point: '1.30'
        },
        {
            isActive: true,
            Engineering: '50-',
            Pharmacy: '60-(*)',
            Grade: "D",
            Point: '1.00'
        },
        {
            isActive: true,
            Engineering: '<50',
            Pharmacy: '<60(**)',
            Grade: "F",
            Point: '0.00'
        },
      ]
    };
  },
  components: {
      dote: require("../doteShape.vue").default
  }
};
</script>

<style lang="sass">
.test
    background: #C20000
    color: #fff
.desc h3
    color: #c20000
    font-weight: bolder
.desc p
  color: #333
</style>