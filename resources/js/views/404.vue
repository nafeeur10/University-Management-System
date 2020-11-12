<template>
  <div>
    <div class="_404">
      <h1 class="content">404 PAGE</h1>
    </div>
    <div style="padding: 6em 0;">
    <b-container class="bv-example-row">
      <b-row  align-v="center" class="justify-content-md-center">
        <b-col col lg="4">
          <img :src="link" class="img-fluid" />
        </b-col>

        <b-col col lg="4">
          <div style="color:#c20000; font-size: 3.9em; font-weight: bolder" > <span style="color: #222"> 404 </span>  ERROR!</div>
          <p>Sorry, we can't find the page you are looking for. Please go to</p>
          <router-link to="/"  style="color: #c20000;" >Home</router-link>
        </b-col>
      </b-row>

    </b-container>
    </div>
  </div>
</template>


<script>
export default {
    data() {
        return {
            link: '/storage/img/image-404.jpg'
        }
    },
};
</script>

<style scoped>
  ._404{
    background: #222;
    color: #fff;
    height: 18em;
    position: relative;
  }
  ._404 h1 {
    color: white;
    border-left: 7px solid #c20000;
    padding-left: 25px;
    text-transform: uppercase;
    font-size: 37px !important;
    margin-left: 3.1em;
    text-align: left;
    position: absolute;
    bottom: 3em;
  }
</style>
