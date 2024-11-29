<script>
import { onMounted, ref } from "vue";
import { gsap } from "gsap";

export default {
  data() {
    return {
      features: [
        "Mentor Profesional Berpengalaman",
        "Kurikulum yang Selalu Update",
        "Proyek Langsung untuk Portofolio",
        "Berkesempatan Magang",
        "Konsultasi Langsung dengan Mentor",
        "Komunitas Belajar yang Supportif",
        "Pembelajaran Interaktif & Seru",
      ],
    };
  },
  mounted() {
    // GSAP animations when the page loads
    gsap.from(".fade-in", {
      opacity: 0,
      y: 20,
      duration: 1,
      ease: "power2.out",
      stagger: 0.2,
    });

    gsap.from(".feature-box", {
      opacity: 0,
      scale: 0.8,
      duration: 1,
      ease: "back.out(1.7)",
      stagger: 0.3,
      delay: 1,
    });
  },
};
</script>

<template>
  <section class="relative">
    <div class="max-w-[1440px] sm:mx-auto sm:pt-40 pt-20 pb-20 mx-5 relative z-10">
      <div class="mx-auto py-10">
        <h3 class="font-semibold text-center text-xl text-blue-500 fade-in">
          Kursus Skill Digital Makassar
        </h3>
        <h1
          class="mx-auto z-50 text-center leading-tight tracking-wide text-2xl font-extrabold my-5 dark:bg-gradient-to-r dark:from-gray-500 dark:via-white dark:to-gray-500 bg-gradient-to-r from-gray-500 via-slate-800 to-gray-500 bg-clip-text text-transparent sm:text-5xl fade-in"
        >
          . . .Bangun Masa Depanmu dengan Skill Terkini. . .
        </h1>
        <p
          class="max-w-4xl text-lg mx-auto z-50 text-center tracking-wide leading-normal dark:text-gray-300 text-slate-600 max-sm:text-sm dark:font-normal font-semibold fade-in"
        >
          Kuasai keterampilan yang paling dicari di dunia digital dengan metode
          pembelajaran praktis, seru, dan langsung dari mentor berpengalaman.
          Jadilah yang terdepan dan mulai perjalanan karirmu dari sini!
        </p>

        <div class="flex justify-center sm:gap-x-5 max-sm:flex-col fade-in">
          <div class="flex max-sm:justify-center mt-10">
            <a
              href="/listing"
              class="max-sm:w-48 max-sm:justify-center flex items-center gap-x-3 text-white bg-blue-600 sm:text-lg tracking-wide py-3 px-4 rounded-lg font-semibold hover:-translate-y-1 duration-300"
            >
              Lihat Kelas Kami
              <span>
                <svg
                  class="w-3 fill-white"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
                  />
                </svg>
              </span>
            </a>
          </div>
          <div class="flex max-sm:justify-center sm:mt-10 mt-5">
            <a
              href="/about"
              class="max-sm:w-48 max-sm:justify-center flex items-center gap-x-3 text-white bg-blue-600 sm:text-lg tracking-wide py-3 px-4 rounded-lg font-semibold hover:-translate-y-1 duration-300"
            >
              Tentang Kami
              <span>
                <svg
                  class="w-3 fill-white"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
                  />
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="flex justify-center gap-5 sm:mt-10 mt-10 flex-wrap">
        <div
          v-for="(feature, index) in features"
          :key="index"
          class="feature-box w-fit max-sm:w-full max-sm:mx-10 border dark:border-gray-600 border-gray-300 py-2 px-5 rounded-lg"
        >
          <p class="text-lg z-50 text-center tracking-wide leading-normal dark:text-gray-300 text-slate-600 max-sm:text-sm">
            {{ feature }}
          </p>
        </div>
      </div>
    </div>
  </section>
</template>