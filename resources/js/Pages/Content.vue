<template>
    <div class="relative h-screen overflow-hidden">
        <div class="absolute nav-container">
            <ul class="navs flex flex-col justify-center items-center"></ul>
        </div>
        <section class="section section-1 w-full h-screen flex justify-center items-center">
            <h5 class="text-3xl">This is section 1</h5>
        </section>
        <section class="section section-2 w-full h-screen flex justify-center items-center">
            <h5 class="text-3xl">This is section 2</h5>
        </section>
        <section class="section section-3 w-full h-screen flex justify-center items-center">
            <h5 class="text-3xl">This is section 3</h5>
        </section>
        <section class="section section-4 w-full h-screen flex justify-center items-center">
            <h5 class="text-3xl">This is section 4</h5>
        </section>
    </div>
</template>
<script>
export default {
    data() {
        return {}
    },
    mounted() {
        this.scrollViews()
    },
    methods: {
        scrollViews() {
            const sections = document.querySelectorAll('.section')
            sections.forEach(e => {
                const navItem = `<li class="nav-item rounded-full"></li>`
                document.querySelector('.navs').innerHTML += navItem
            })
            const itemsNavigator = document.querySelectorAll('.nav-item')
            itemsNavigator[0].classList.add('active')
        },
    },
}
</script>