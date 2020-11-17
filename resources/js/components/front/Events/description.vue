<template>
  <div>
    <div class="events_1">
      <div class="container">
        <div class="row">
          
            <div class="card-deck col-md-4" v-for="(event, index) in events" :key="event.id">

              <div class="card">
                <img :src="'/images/event/' + eventImages[index].event_image" class="card-img-top" alt="..." />
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3 text-center" style="border-right: 1px #c20000 solid; padding-left: 0;">
                      <span class="">{{ event.event_date | monthFormat }}</span>
                      <h1 class="">{{ event.event_date | dayFormat }}</h1>
                      <span style="font-size:14px;">
                          {{ event.event_date | yearFormat }}
                      </span>
                    </div>
                    <div class="col-sm-9">
                      <ul>
                        <li style="direction: ltr;">{{ event.event_start_time | timeFormat}} - {{ event.event_end_time }}</li>
                      </ul>
                      <router-link :to="{ name: 'Event', params: { id: event.id } }" class="card-title" exact v-if="$store.getters.getLanguage == 'eng'">{{ event.event_title }}</router-link>
                      <router-link :to="{ name: 'Event', params: { id: event.id } }" class="card-title" exact v-else>{{ event.event_title_arabic }}</router-link>
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
        events: [],
        eventImages: []
    }
  },
  methods: {
    getAllEvents() {
      this.$http.get('/api/event/all')
      .then( (res) => {
        this.events = res.data.events,
        this.eventImages = res.data.eventImages
      })
    }
  },
  filters: {
    yearFormat(value) {
      return value.split('-')[0];
    },
    timeFormat(time) {

      let T = time.split(':');
      let mainTime = T[0];

      if(mainTime == '00') {
        return '12' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '01') {
        return '01' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '02') {
        return '02' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '03') {
        return '03' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '04') {
        return '04' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '05') {
        return '05' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '06') {
        return '06' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '07') {
        return '07' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '08') {
        return '08' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '09') {
        return '09' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '10') {
        return '10' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '11') {
        return '11' + ':' + T[1] + ' '  + 'AM';
      }

      else if(mainTime == '12') {
        return '12' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '13') {
        return '01' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '14') {
        return '02' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '15') {
        return '03' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '16') {
        return '04' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '17') {
        return '05' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '18') {
        return '06' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '19') {
        return '07' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '20') {
        return '08' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '21') {
        return '09' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '22') {
        return '10' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '23') {
        return '11' + ':' + T[1] + ' '  + 'PM';
      }

      else if(mainTime == '24') {
        return '12' + ':' + T[1] + ' '  + 'PM';
      }

    },
    monthFormat(value) {
      let dateValue = value.split('-');
      let month = dateValue[1];
      if(month == 1) return 'Jan';
      else if(month == 2) return 'Feb';
      else if(month == 3) return 'Mar';
      else if(month == 4) return 'Apr';
      else if(month == 5) return 'May';
      else if(month == 6) return 'Jun';
      else if(month == 7) return 'Jul';
      else if(month == 8) return 'Aug';
      else if(month == 9) return 'Sep';
      else if(month == 10) return 'Oct';
      else if(month == 11) return 'Nov';
      else return 'Dec';
    },
    dayFormat(value) {
      let dateValue = value.split('-');
      return dateValue[2];
    }
  },
  created() {
    this.getAllEvents();
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
