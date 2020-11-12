<template>
  <div class="container service">
    <h1>DEPARTMENT BOARD MEMBERS</h1>
    <h4>
      Microbiology Department Major Staff
    </h4>
    <br><br>
    <div class="row">
          <div class="col-sm-12">
            <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Ahmed Farouk Mohamed</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/AhmedFarouk.pdf')">Lecturer</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Amira Gamal Saad Ali</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/AmiraGamal.pdf')">Teaching ASSISTANT</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Asmaa Saber Farag</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/AsmaaSaber.pdf')">Teaching ASSISTANT</button>
                    </div> 
                    <div class="col-sm-3">
                      <h3>Dalia Ali El-sayed</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/DaliaEl-Damasy.pdf')">Lecturer</button>
                    </div> 
            </div><br><br>
            <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Heba Mostafa Abostate</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/HebaM.Abostate.pdf')">Lecturer</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Kareem Adel Ibrahim</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/Ibrahim.pdf')">Teaching Assistant</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Marah Mohammed</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/MarahHussein.pdf')">Teaching Assistant</button>
                    </div> 
                    <div class="col-sm-3">
                      <h3>Mennatallah Youssef</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/MennatallahYousef.pdf')">Lecturer</button>
                    </div>
          </div><br><br>
          <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>MOHAB SHALABY</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/MohabMohamed.pdf')">Teaching Assistant</button>
                    </div>  
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Mohamed Reda</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/MohamedReda.pdf')">Assistant Lecturer</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Mohamed Abd El-Aziz</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/MohamedTaha.pdf')">Teaching Assistant</button>
                    </div> 
                    <div class="col-sm-3">
                      <h3>NESMA BARBARY GODA</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/NesmaGoda.pdf')">Lecturer</button>
                    </div>                      
          </div><br><br>
          <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Noura Abdullah</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/NouraAbdullah.pdf')">Teaching Assistant</button>
                    </div>  
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Omar Hassan Badie</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/OmarHassan.pdf')">Lecturer</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Tharwat Elkhamissy</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/TharwatElkhamissy.pdf')">Professor</button>
                    </div>  
                    <div class="col-sm-3">
                      <h3>Yehia Abdelmoniem</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/YehiaAbd-Elmoneim.pdf')">Lecturer</button>
                    </div>                    
          </div>
</div>
</div>
      
  </div>
</template>



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
