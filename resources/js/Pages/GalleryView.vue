<script setup>
import Navbar from '@/Components/Navbar.vue';
import CtaHome from '@/Components/CtaHome.vue';
import Footer from '@/Components/Footer.vue';
</script>
<template>
    <Head title="Welcome" />
    <div class="font-['Urbanist'] relative overflow-x-hidden bg-gradient-to-br from-[#0F0F0F] to-[#0D1B2A] z-50">

        <Navbar />

        <section class="">
            <div class="max-w-[1440px] sm:mx-auto sm:pt-40 pt-20 mx-5">
                <div class="mx-auto py-10">
                    <h3 class="font-semibold text-center text-xl text-blue-500">
                        Galeri Kami
                    </h3>
                    <h1
                    class="mx-auto z-50 text-center leading-tight tracking-wide text-2xl font-extrabold my-5 bg-gradient-to-r from-gray-500 via-white to-gray-500 bg-clip-text text-transparent sm:text-5xl"
                    >
                    . . .Inspirasi dari Rupa Raya Academy. . .
                    </h1>
                    <p
                    class="max-w-4xl text-lg mx-auto z-50 text-center tracking-wide leading-normal text-gray-300 max-sm:text-sm"
                    >
                    Koleksi foto dan video yang mengabadikan suasana kelas, proyek-proyek peserta, hingga acara eksklusif bersama para profesional.
                    </p>
                </div>
            </div>
            <div class="relative">
                <img class="w-full shadow-blue-600 drop-shadow-2xl" src="/images/gallery/gallery-main.jpg" alt="">
            </div>
            <div class="max-w-[1440px] sm:mx-auto pt-10 mx-5">
                <p
                class="max-w-4xl mx-auto z-50 text-center tracking-wide leading-normal text-gray-300 max-sm:text-sm"
                >
                Lihat sendiri bagaimana Rupa Raya Academy membuka peluang masa depan melalui pendidikan.
                </p>
            </div>
        </section>

        <CtaHome />

        <Footer />

    </div>
</template>