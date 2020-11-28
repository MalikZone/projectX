<template>
    <div class="relative h-screen overflow-hidden">
        <div class="fixed nav-container">
            <ul class="navs flex flex-col justify-center items-center"></ul>
        </div>
        <section class="section section-1 w-full h-screen flex justify-center items-center">
            <h5 class="text-3xl">This is wrapper 1</h5>
        </section>
        <section class="section section-2 w-full h-screen flex justify-center items-center">
            <h5 class="text-3xl">This is wrapper 2</h5>
        </section>
        <section class="section section-3 w-full h-screen flex justify-center items-center">
            <h5 class="text-3xl">This is wrapper 3</h5>
        </section>
        <section class="section section-4 w-full h-screen flex justify-center items-center">
            <h5 class="text-3xl">This is wrapper 4</h5>
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
            let eLto = 0
            const sections = document.querySelectorAll('.section')
            sections.forEach((e, i) => {
                const navItem = `<li class="nav-item rounded-full"></li>`
                document.querySelector('.navs').innerHTML += navItem
            })
            const navItem = document.querySelectorAll('.nav-item')
            navItem[eLto].classList.add('active')
            navItem.forEach((e, i) => {
                e.addEventListener('click', function() {
                    navItem[eLto].classList.remove('active')
                    sections[i].scrollIntoView({
                        behavior: 'smooth'
                    })
                    eLto = i
                    navItem[eLto].classList.add('active')
                })
            })
            document.querySelector('html, body').addEventListener('wheel', wheel => {
                wheel.preventDefault()
                let wheelY = Math.floor(wheel.deltaY)
                if (wheelY > 0) {
                    if (eLto === sections.length - 1) {
                        return false
                    } else {
                        navItem[eLto].classList.remove('active')
                        eLto++
                        sections[eLto].scrollIntoView({
                            behavior: 'smooth'

                        })
                        navItem[eLto].classList.add('active')
                    }
                } else {
                    if (eLto === 0) {
                        return false
                    } else {
                        navItem[eLto].classList.remove('active')
                        eLto--
                        sections[eLto].scrollIntoView({
                            behavior: 'smooth'
                        })
                        navItem[eLto].classList.add('active')
                    }
                }
            }, { passive: false })
        },
    },
}
</script>