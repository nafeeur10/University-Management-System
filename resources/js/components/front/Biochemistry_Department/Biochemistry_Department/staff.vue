<template>
  <div class="container service">
    <h1>DEPARTMENT BOARD MEMBERS</h1>
    <h4>
      Biochemistry Department Major Staff
    </h4>
    <br><br>
    <div class="row">
          <div class="col-sm-12">
            <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Abdaullah Radwan</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/AbdullahRadwan.pdf')">PROFESSOR</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Ahmed Youssef</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/AhmedYoussef.pdf')">ASSISTANT PROFESSOR</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Aya Mohamed</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/AyaMohamed.pdf')">PROFESSOR</button>
                    </div> 
                    <div class="col-sm-3">
                      <h3>Ghadir Ali Sayed</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/GhadirSayed.pdf')">INSTRUCTOR</button>
                    </div> 
            </div><br><br>
            <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Gamil Mohamed Ibrahim</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/GamilAbdallah.pdf')">Vice Dean for student affairs</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Hussein AlSawaf</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/HusseinAlSawaf.pdf')">PROFESSOR</button>
                    </div> 
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <h3>Morkoss Medhat Fakhry</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/MorkossFakhry.pdf')">Teaching assistant</button>
                    </div> 
                    <div class="col-sm-3">
                      <h3>Nada Salah Ali</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/NadaSalahAli.pdf')">Teaching assistant</button>
                    </div>
          </div><br><br>
          <div class="row">
                    <div class="col-sm-3">
                      <h3>Omnia Ezzat Esmaeil</h3>
                      <button class="btn-staff" type="submit" onclick="window.open('storage/img/OmniaEzzat.pdf')">licture</button>
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
