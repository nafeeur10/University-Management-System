<template>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <div class="right_holder">
          <h1 class="title">Undergraduate Admission</h1>
          <div
            class="desc"
          >
            The university accepts students who have obtained an Egyptian general secondary certificate or equivalent.
            <br>
            <br>
            First: applying in person<br>

            Please go to the university headquarters with the following documents:<br>
            -  A copy of the student’s ID or passport <br>
            - a copy of the birth certificate <br>
            - a copy of the guardian’s ID <br>
            - a copy of the student’s Egyptian general secondary certificate or equivalent <br>
            - a copy of residence in the country of study for equivalent certificates from abroad.<br>
            -Pay the application fees and fill in the form (application fees are non-refundable)<br><br>
            Second: Apply online via the following link 
          </div>
          <a 
                  class="btn life"
                  href="https://admission.eru.edu.eg/UI/Adm/AdmMod_ApplicantRegCheck.aspx"
                  target="_blank">Apply Now</a>
          <!-- <router-link class="btn life" to="/Apply-now" exact>APPLY NOW</router-link> -->

        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="back">
            <h4>TRANSFER STUDENTS</h4>
            <p>Students of other colleges, institutes or universities may transfer to the Egyptian Russian University according to the conditions laid down by the Supreme Council of Universities and the university conditions.<br><br>

Taking into account the minimum transfer limits for each college, which are (90%) for the Faculty of Oral and Dental Medicine and the Faculty of Pharmacy, (80%) for the Faculty of Engineering and (60%) for the Faculty of Administration, Professional Technology and Computers.<br><br>

It is required to achieve a CGPA of at least 2 and to afford the documents required for transfer.<br><br>

The university set off committee makes a set off proposal that defines the courses in which the applicant has succeeded and are considered equivalent to the university’s syllabuses to be presented to the Ministry’s set off committee to obtain approval of exempting the applicant from studying these courses at the university. 
</p>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.right_holder{
    padding: 30px;
    padding-left: 0;
    }
    .title{
        color: #c20000;
        font-weight: bold;
        }
    .desc{
        color: #777;
        }
    .life, .us{
        background: #c20000;
        color: #fff;
        padding: 15px 50px;
        border-radius: 0;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 15px;
        border: #c20000 2px solid;
        margin: 31px 29px 0 0;
        transition: all .3s ease-in-out;
        }
    .us{
        border-color: #304770;
        background-color: #304770;
        }
    .life:hover{
        background-color: #fff;
        color: #c20000;
        }
    .us:hover{
        background-color: #fff;
        color: #304770;
        }
.back{
    background: #fceedd;
    background-image: url(/storage/img/number_bg_object1.png);
    height: 100%;
    padding:40px;
    width: 100%;
}
</style>
