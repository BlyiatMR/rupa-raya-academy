<script setup>
import Navbar from '@/Components/Navbar.vue';
import Videos from '@/Components/Videos.vue';
import WhyChooseMe from '@/Components/WhyChooseMe.vue';
import CtaHome from '@/Components/CtaHome.vue';
import Footer from '@/Components/Footer.vue';
</script>

<script>
export default {
  data() {
    return {
      classSpecial: [
        {
          name: "3D Architectural Rendering",
          date: "09 November 2024",
          price: "Rp. 1.800.000",
          discount: "Rp. 899.000",
          iconPath: "m12 3l7.794 4.5v7.845a2 2 0 0 1-1 1.732L13 20.423a2 2 0 0 1-2 0l-5.794-3.346a2 2 0 0 1-1-1.732V7.5z M12 7v5l-4.33 2.5M12 12l4.33 2.5",
        },
        {
          name: "SketchUp 3D Modelling",
          date: "09 November 2024",
          price: "Rp. 1.398.000",
          discount: "Rp. 699.000",
          iconPath: "M10.55 2.876L4.595 6.182a2.98 2.98 0 0 0-1.529 2.611v6.414a2.98 2.98 0 0 0 1.529 2.61l5.957 3.307a2.98 2.98 0 0 0 2.898 0l5.957-3.306a2.98 2.98 0 0 0 1.529-2.611V8.793a2.98 2.98 0 0 0-1.529-2.61L13.45 2.876a2.98 2.98 0 0 0-2.898 0Z M20.33 6.996L12 12L3.67 6.996M12 21.49V12",
        },
        {
          name: "3D Product & Photoshoot",
          date: "09 November 2024",
          price: "Rp. 1.298.000",
          discount: "Rp. 699.000",
          iconPath: "M11.5 2.134a1 1 0 0 1 1 0l7.794 4.5a1 1 0 0 1 .5.866v7.845a3 3 0 0 1-1.5 2.598L13.5 21.29a3 3 0 0 1-3 0l-5.794-3.346a3 3 0 0 1-1.5-2.598V7.5a1 1 0 0 1 .5-.866zM12 6a1 1 0 0 1 1 1v4.423l3.83 2.211a1 1 0 1 1-1 1.732L12 13.155l-3.83 2.211a1 1 0 1 1-1-1.732L11 11.423V7a1 1 0 0 1 1-1",
        },
      ],
      classGeneral: [
        {
          name: "Flutter Mobile Apps",
          date: "09 November 2024",
          link: "/detail/flutter",
          img: "/images/bg-course.jpg",
          price: "Rp. 1.498.000",
          discount: "Rp. 749.000",
        },
        {
          name: "Fullstack Web Development",
          date: "02 November 2024",
          link: "/detail/fullstack",
          img: "/images/bg-fullstack.jpg",
          price: "Rp. 1.398.000",
          discount: "Rp. 699.000",
        },
        {
          name: "UI/UX Design Mobile App",
          date: "02 September 2024",
          img: "/images/bg-uiux.jpg",
          price: "Rp. 1.298.000",
          discount: "Rp. 649.000",
        },
      ],
    };
  },
};
</script>
<template>
  <Head title="Welcome" />
  <div class="font-['Urbanist'] relative overflow-x-hidden z-50">
    <Navbar />

    <!-- Section Header -->
    <section>
      <div class="max-w-[1440px] sm:mx-auto sm:pt-40 pt-20 mx-5">
        <div class="absolute -top-52 -left-52 blur-[200px] opacity-20 -z-10 w-[40rem] h-[40rem] bg-blue-500 rounded-full"></div>
        <div class="absolute -top-52 -right-52 blur-[200px] opacity-20 -z-10 w-[35rem] h-[35rem] bg-yellow-500 rounded-full"></div>
        <div class="mx-auto py-10">
          <h3 class="font-semibold text-center text-xl text-blue-500">
            Berita Terkini
          </h3>
          <h1 class="mx-auto z-50 text-center leading-tight tracking-wide text-2xl font-extrabold my-5 bg-gradient-to-r from-gray-500 via-white to-gray-500 bg-clip-text text-transparent sm:text-5xl">
            . . .Halaman Berita Segera Hadir!. . .
          </h1>
          <p class="max-w-4xl text-lg mx-auto z-50 text-center tracking-wide leading-normal text-gray-300 max-sm:text-sm">
            Segera hadir halaman berita Rupa Raya Academy, di mana Anda dapat menemukan:
          </p>
          <div class="flex flex-wrap justify-center gap-5 mt-10">
            <div class="sm:w-fit w-72 border border-gray-500 py-2 px-5 rounded-lg">
              <p class="text-lg z-50 text-center tracking-wide leading-normal text-gray-300 max-sm:text-sm">
                Berita terbaru seputar dunia teknologi.
              </p>
            </div>
            <div class="sm:w-fit w-72 border border-gray-500 py-2 px-5 rounded-lg">
              <p class="text-lg z-50 text-center tracking-wide leading-normal text-gray-300 max-sm:text-sm">
                Informasi tentang event dan kelas terbaru kami.
              </p>
            </div>
            <div class="sm:w-fit w-72 border border-gray-500 py-2 px-5 rounded-lg">
              <p class="text-lg z-50 text-center tracking-wide leading-normal text-gray-300 max-sm:text-sm">
                Tips & trik eksklusif.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <CtaHome />

    <!-- Footer -->
    <Footer />
  </div>
</template>