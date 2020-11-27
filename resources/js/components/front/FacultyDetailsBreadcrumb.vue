<template>
    <div>
        <b-container class="bv-example-row">
            <b-row>
                <b-col>
                    <b-breadcrumb style="background: #fff;">
                        <b-breadcrumb-item to="/">
                            Home
                            <i class="fa fa-arrow-right" style="color: #c20000" aria-hidden="true"></i>
                        </b-breadcrumb-item>
                        <b-breadcrumb-item class="target" > {{ title }} </b-breadcrumb-item>

                    </b-breadcrumb>
                    <span class="hr" ></span>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>
<script>
export default {
    props: ['title'],
    data () {
        return {
            path: ''
        }
    },
    methods: {
        crumbs() {
            let pathArray = this.$route.path.split("/")

            pathArray.shift()
            let breadcrumbs = pathArray.reduce((breadcrumbArray, path, idx) => {
                breadcrumbArray.push({
                    path: path,
                    to: breadcrumbArray[idx - 1]
                        ? "/" + breadcrumbArray[idx - 1].path + "/" + path
                        : "/" + path,
                    text: this.$route.matched[idx].meta.breadCrumb || path,
                });
                return breadcrumbArray;
            }, [])
            this.path= breadcrumbs[0].text
        }
    },
  created() {
      this.crumbs()
  }
};
</script>
<style scoped>

    .target{
        text-transform: lowercase;
    }
    .target a::first-letter{
        text-transform: uppercase !important;
    }
    .breadcrumb
    {
        background: rgb(255, 255, 255);
        margin-bottom: 0;
        padding: 0;
        padding-top: 2em;
    }
    .breadcrumb-item a
    {
        color: #333 !important;
    }
    .breadcrumb-item + .breadcrumb-item
    {
        padding-left: 0;
    }
    .breadcrumb-item + .breadcrumb-item::before
    {
        content: "";
    }
    .hr
    {
        border-bottom: 1px solid #ccc;
        width: 38em;
        height: 5px;
        display: block;
        margin-bottom: 2em;
    }
</style>