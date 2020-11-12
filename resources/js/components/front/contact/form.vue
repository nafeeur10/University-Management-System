<template>
    <div class="form">
        <h2 class="title" >Send a message</h2>
        <p>Send us an email and we will get back to you as soon as possible</p>
        <span></span>

        <b-form @submit.prevent="onSubmit" @submit.stop.prevent @reset="onReset" v-if="show">

            <b-form-group id="input-group-2" label-for="input-2">
                <b-form-input
                    id="input-2"
                    v-model="form.name"
                    class="name"
                    required
                    placeholder="Name *"
                ></b-form-input>
                <b-form-input
                    id="input-1"
                    v-model="form.email"
                    type="email"
                    required
                    class="email"
                    placeholder="Email *"
                ></b-form-input>
            </b-form-group>

            <b-form-group id="input-group-2" label-for="input-2">
                <b-form-input
                    id="input-2"
                    v-model="form.subject"
                    class="subject"
                    required
                    placeholder="Subject *"
                ></b-form-input>
            </b-form-group>
            <b-form-group id="input-group-3" label-for="input-3">

                <b-form-select
                    id="input-3"
                    v-model="form.depart"
                    :options="depatment"
                    class="depart"
                    required
                ></b-form-select>
                
                <b-form-select
                    id="input-3"
                    v-model="form.issue"
                    :options="issues"
                    class="issue"
                    required
                ></b-form-select>
            </b-form-group>

            <b-form-group id="input-group-4">
                <b-form-textarea
                    id="textarea-large"
                    v-model="form.msg"
                    size="lg"
                    rows="6"
                    max-rows="6"
                    no-auto-shrink
                    no-resize
                    class="Message"
                    placeholder="Message *"
                    required
                ></b-form-textarea>
            </b-form-group>

            <b-button type="submit" style="background: #c20000" variant="danger">Submit</b-button>
        </b-form>

    </div>
</template>



<script>
  export default {
    data() {
      return {
        form: {
          email: '',
          name: '',
          subject: '',
          msg: '',
          depart: null,
          issue: null,
          checked: []
        },
        depatment: [{ value: null, text: 'Please select an option' }],
        issues: [{ value: null, text: 'Please select an option' }],
        show: true
      }
    },
    methods: {
      onSubmit(evt) {
        //evt.preventDefault()
        let contactDetails = JSON.stringify(this.form);

        this.$http.post('api/contact/form/submit', contactDetails).then( (res) => {
            toastr.success('Message has sent Successfully!', 'Thank you!');
            this.onReset();
            console.log(res);
        }).catch( (err) => {
            console.log(err);
        })
      },
      onReset() {
        // evt.preventDefault()
        // Reset our form values
        this.form.email = ''
        this.form.name = ''
        this.form.subject = ''
        this.form.msg = ''
        this.form.depart = null
        this.form.issue = null
        this.form.checked = []
        // Trick to reset/clear native browser form validation state
        this.show = false
        this.$nextTick(() => {
          this.show = true
        })
      },

      getDept() {
          this.$http.get('api/contact/form/department').then((res)=> {

            let dept = res.data.dept;
            let self = this;

            dept.forEach(d => {
                let obj = {
                    value: d.department_email,
                    text: d.department_name
                }
                self.depatment.push(obj);
            });

          }).catch((err) => {
              console.log(err);
          })
      },
      getIssue() {
          this.$http.get('api/contact/form/issue').then((res)=> {

              let self = this;
              let iss = res.data.issues;

              console.log(iss);

              iss.forEach( i => {
                  let obj = {
                        value: i.id,
                        text: i.contact_issues
                  }
                  self.issues.push(obj);
              });

              //this.issues = res.data.issues
              //console.log("Issues: ", this.issues);
          }).catch((err) => {
              console.log(err);
          })
      }
    },
    mounted() {
        this.getDept();
        this.getIssue();
    }
  }
</script>

<style scoped lang="sass">
    .form
        padding-bottom: 55px
        color: #777
        .title
            color: #c20000
            font-weight: bolder
        p
            margin-bottom: 12px
        span
            width: 49px
            background: #c20000
            height: 3px
            display: block
            margin-bottom: 30px
    .name, .email, .depart, .issue
        display: inline-block
        width: 49%
        border-radius: 0
    .email, .issue
        margin-left: 6px
    .subject, .Message
        border-radius: 0

</style>
