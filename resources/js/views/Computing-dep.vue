<template>
  <div>
    <carousel :link="link" text="Bachelor of political science" />
    <breadcrumb />
    <Vision  />
    <political :data="political" type="p" />
    <dote style="margin-top: 50px;" />
  </div>
</template>


<script>
export default {
    data() {
        return {
            link: [
                {
                    img: '/storage/img/quality.jpeg',
                }
            ],
            political : [
                {
                    title: 'Bachelor of political science',
                    desc: 'The political science program in the Department of Politics helps students cultivate perspective, develop critical thinking and communication skills, and understand the economic, social, and political systems within which we live and work. Our curriculum builds on the department’s research focuses and strengths. These include public policy, international politics, international organizations, human rights, and law and society. The graduate of Political Science is well equipped for life in the modern world, and to follow those professions and lines of work that require independence of thought, initiative, creativity in solving problems, and continuing self-development. Our graduates of   Political Science can work in business, journalism, research, analytic writing, and public contact work. They can also occupy   positions   in public, private, development agencies, the diplomatic service, governmental ministries and agencies, and university teaching.'
                }
            ]
        }
    },
  components: {
    breadcrumb: require("../components/front/breadcrumb.vue").default,
    carousel: require("../components/front/carousel.vue").default,
    dote: require("../components/front/doteShape.vue").default,
      political: require("../components/front/temp.vue").default
  }
};
</script>
