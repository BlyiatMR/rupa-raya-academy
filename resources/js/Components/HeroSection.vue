<script>
export default {
  data() {
    return {
      features: [
        "Mentor Profesional Berpengalaman",
        "Kurikulum yang Selalu Update",
        "Proyek Langsung untuk Portofolio",
        "Sertifikat Resmi dan Diakui",
        "Konsultasi Langsung dengan Mentor",
        "Komunitas Belajar yang Supportif",
        "Pembelajaran Interaktif & Seru",
      ],
    };
  },
};
</script>

<template>
    <section class="relative">
      <div class="max-w-[1440px] sm:mx-auto sm:pt-40 pt-20 pb-20 mx-5">
        <div class="mx-auto py-10">
          <h3 class="font-semibold text-center text-xl text-blue-500">
            Kursus Skill Digital Makassar
          </h3>
          <h1
            class="mx-auto z-50 text-center leading-tight tracking-wide text-2xl font-extrabold my-5 bg-gradient-to-r from-gray-500 via-white to-gray-500 bg-clip-text text-transparent sm:text-5xl"
          >
            . . .Bangun Masa Depanmu dengan Skill Terkini. . .
          </h1>
          <p
            class="max-w-4xl text-lg mx-auto z-50 text-center tracking-wide leading-normal text-gray-300 max-sm:text-sm"
          >
            Kuasai keterampilan yang paling dicari di dunia digital dengan metode
            pembelajaran praktis, seru, dan langsung dari mentor berpengalaman.
            Jadilah yang terdepan dan mulai perjalanan karirmu dari sini!
          </p>
  
          <div class="flex justify-center sm:gap-x-5 max-sm:flex-col">
            <div class="flex max-sm:justify-center mt-10">
              <a
                href="/listing"
                class="max-sm:w-48 max-sm:justify-center flex items-center gap-x-3 text-white bg-blue-600 sm:text-lg tracking-wide py-3 px-4 rounded-lg font-semibold hover:-translate-y-1 duration-300"
              >
                Lihat Kelas Kami
                <span>
                  <svg
                    class="w-3 fill-gray-300"
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
                    class="w-3 fill-gray-300"
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
          <div v-for="(feature, index) in features" :key="index" class="w-fit max-sm:w-full max-sm:mx-10 border border-gray-500 py-2 px-5 rounded-lg">
            <p class="text-lg z-50 text-center tracking-wide leading-normal text-gray-300 max-sm:text-sm">
              {{ feature }}
            </p>
          </div>
        </div>
      </div>
    </section>
  </template>
  