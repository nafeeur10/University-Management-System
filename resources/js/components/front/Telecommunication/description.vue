<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class=lip >
                    <div class="back">
                        <h3>Aims</h3>
                        On successful completion of the program, the graduates of the Telecommunication Engineering program should be able to:<br>
                        <ul>
                        <li>
                        Use knowledge of basic science, mathematics and engineering concepts to provide solutions for telecommunication engineering problems.</li>
                        <li>Employ methods of scientific analysis, innovative design and supervision to telecommunication engineering disciplines.</li>
                        <li>Apply techniques of maintenance and operation to different telecommunications systems.</li>
                        <li>Use effectively and professionally specialized analytical tools, software packages and engineering instruments related to telecommunication disciplines.</li>
                        <li>Participate in quality improvement projects that consider the impact on society, and environment.</li>
                        <li>Incorporate factors such as balanced costs, safety, quality, reliability, and environmental impact in telecommunication engineering designs.</li>
                        <li>Utilize communication skills and professional ethics to collaborate effectively within multidisciplinary team.</li>
                        <li>Use the techniques, skills, and appropriate engineering tools, necessary for engineering practice and project management.</li>
                        <li>Participate in the identification and solution of problems facing the society and consider the impacts of engineering soluations on it.</li>
                        <li>Participate in research and development programs in telecommunication engineering instituations and industry.</li>
                        </ul>

                        <div class="right_holder">
                            <button class="btn life" type="submit" onclick="window.open('storage/img/Telecommunicati-Engineering-Courses.pdf')">Courses</button>
                            <button class="btn us" type="submit" onclick="window.open('storage/img/organizational-structure-telecom.pdf')">Organizational Structure</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped lang="sass">
.right_holder
    padding-left: 0
    .title
        color: #c20000
        font-weight: bold
    .desc
        color: #777
    .life, .us
        background: #c20000
        color: #fff
        padding: 15px 50px
        border-radius: 0
        text-transform: uppercase
        font-weight: bold
        font-size: 15px
        border: #c20000 2px solid
        margin: 31px 29px 0 0
        transition: all .3s ease-in-out
    .us
        border-color: #304770
        background-color: #304770
    .life:hover
        background-color: #fff
        color: #c20000
    .us:hover
        background-color: #fff
        color: #304770
.lip
    background-image: url(/storage/img/cost_img1.jpg)
    background-size: cover
    width: 100%
    height: 48em
    margin-bottom: 100px
.back
    position: absolute
    background: #fceedd
    background-image: url(/storage/img/campus_slider_object.png)
    height: 77%
    padding: 40px 2em 40px 40px
    width: 85%
    right: 9em
    top: 9em


</style>
