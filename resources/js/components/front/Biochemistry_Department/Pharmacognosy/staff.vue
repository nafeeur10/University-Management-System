<template>
  <div class="container service">
    <h1>DEPARTMENT BOARD MEMBERS</h1>
    <h4>
      Pharmacognosy Department Major Staff
    </h4>
    <br><br>
    <div class="row">
          <div class="col-sm-12">
            <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Aalaa Ismail</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/AalaaIsmail.pdf')">Lecturer</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>AbdelRahman Mostafa</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/Abdel-RahmanMostafa.pdf')">Lecturer</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Dina El Naggar</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/DinaElnaggar.pdf')">Lecturer</button>
                    </div> 
                    <div class="col-sm-3">
                      <h3>Eman Mohamed El-Taher</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/EmanMohamed.pdf')">Teacher ASSISTANT</button>
                    </div> 
            </div><br><br>
            <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Enas Mohamed</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/EnasMohamed.pdf')">Teaching ASSISTANT</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Mahmoud Ali Mansour</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/MahmoudAli.pdf')">Teaching ASSISTANT</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Marina Malak</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/MarinaMalak.pdf')">Lab Demonstrator</button>
                    </div> 
                    <div class="col-sm-3">
                      <h3>Marwa Harby</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/MarwaHarby.pdf')">Teaching ASSISTANT</button>
                    </div>
            </div><br><br>

            <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Mohamed Sayed</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/MohamedSayed.pdf')">Teaching Assistant</button>
                    </div>  
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Mostafa Basheer</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/MostafaBasheer.pdf')">Teaching Assistant</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Moustafa Hassan</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/MoustafaHassan.pdf')">Lecturer</button>
                    </div> 
                    <div class="col-sm-3">
                      <h3>Omayma Dawood</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/OmaymaDawood .pdf')">Professor</button>
                    </div>                      
            </div><br><br>
            

            <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Reham Mekky</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/RehamMekky.pdf')">Assistant Professor</button>
                    </div>
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Sara Rashad</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/SaraRashad.pdf')">Lecturer</button>
                    </div>  
                    <div class="col-sm-3">
                      <h3>Shaimaa Essam</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/ShaimaaEssam.pdf')">Teaching Assistant</button>
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
