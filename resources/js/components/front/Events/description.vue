<template>
  <div>
    <div class="events_1">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="card-deck">

              <div class="card">
                <img src="/storage/img/event13.jpg" class="card-img-top" alt="..." />
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <span class="">Oct</span>
                      <h1 class="">21<span style="font-size:14px;"> 2020</span></h1>
                    </div>
                    <div class="col-sm-9">
                      <ul>
                        <li class="">5:00 PM - 7:00 PM</li>
                      </ul>
                      <router-link to="/Event13" class="card-title" exact>My country is a land of pride and dignity</router-link>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {

    }
  },
  methods: {

  },
  created() {
    
  }
}
</script>

<style scoped>
.card
    {
        border:0px ;
    
    }
  .more:hover
  {
    color: #ccc;
  }
  .desc p{
    color: white !important;
  }
  .card-title
  {
    color:#c20000 !important;
    font-weight: bold;
  }
</style>
