<template>
    <div class="form">
        <h2 class="title" >Join Our Team</h2>
        <span></span>

        <b-form @submit="onSubmit" @submit.stop.prevent @reset="onReset" v-if="show">

            <b-form-group id="input-group-2" label-for="input-2">
                <b-form-input
                    id="input-2"
                    v-model="form.First"
                    class="name"
                    required
                    placeholder="First Name *"
                ></b-form-input>
                <b-form-input
                    id="input-1"
                    v-model="form.Last"
                    required
                    class="email"
                    placeholder="Last Name *"
                ></b-form-input>
            </b-form-group>

            <b-form-group id="input-group-2" label-for="input-2">
                <b-form-input
                    id="input-2"
                    v-model="form.email"
                    class="subject"
                    type="email"
                    required
                    placeholder="Email *"
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
                <b-form-file
                        v-model="file"
                        :state="Boolean(file)"
                        class="careerFile"
                        placeholder="Upload your CV"
                        drop-placeholder="Drop file here..."
                ></b-form-file>
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
            Last: '',
            First: '',
            email: '',
            msg: '',
            email: '',
            depart: null,
            file: null,
            checked: []
        },
        depatment: [{ text: 'Job', value: null }, 'University’s assistant secretary', 'Others'],
        show: true
      }
    },
    methods: {
      onSubmit(evt) {
        evt.preventDefault()
        alert(JSON.stringify(this.form))
        onReset();
      },
      onReset(evt) {
        evt.preventDefault()
        // Reset our form values
        this.form.Last = ''
        this.form.First = ''
        this.form.subject = ''
        this.form.msg = ''
        this.form.email = ''
        this.form.depart = null
        this.form.checked = []
        // Trick to reset/clear native browser form validation state
        this.show = false
        this.$nextTick(() => {
          this.show = true
        })
      }
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
    .name, .email, .depart, .careerFile

        display: inline-block
        width: 49%
        border-radius: 0
    .email, .issue
        margin-left: 6px
    .subject, .Message
        border-radius: 0
    .careerFile
        .custom-file-label
            border-radius: 0 !important
            border-color: #ced4da !important

</style>
