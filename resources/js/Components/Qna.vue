<script>
  export default {
    data() {
      return {
        activeIndex: 0,
        contentHeights: [],
        questions: [
          {
            question: "Fasilitas apa saja yang tersedia di Rupa Raya Academy?",
            answer:
              "Kami menyediakan fasilitas lengkap seperti 20 Personal Computer dengan spesifikasi tinggi, ruangan ber-AC, proyektor, papan tulis, jaringan internet cepat, serta parkiran yang luas untuk kenyamanan dan kelancaran proses belajar mengajar.",
          },
          {
            question: "Bagaimana metode pembelajaran di Rupa Raya Academy?",
            answer:
              "Kami menggunakan pendekatan praktis dengan porsi hands-on yang besar, didukung oleh mentor profesional yang berpengalaman di industri. Setiap sesi dilengkapi dengan studi kasus dan proyek nyata.",
          },
          {
            question: "Apakah menyediakan beasiswa?",
            answer:
              "Kami belum menyediakan program beasiswa. Namun, bagi peserta yang menunjukkan prestasi dan dedikasi tinggi, ada peluang untuk mengikuti program internship atau magang di PT Rupa Raya Indonesia.",
          },
        ],
      };
    },
    mounted() {
      this.questions.forEach((_, index) => {
        const element = this.$refs.answers[index];
        if (element) {
          const childHeight = Array.from(element.children).reduce(
            (acc, child) => acc + child.offsetHeight,
            0
          );
          this.contentHeights.push(childHeight);
        }
      });
    },
    methods: {
      toggleAnswer(index) {
        this.activeIndex = this.activeIndex === index ? null : index;
      },
    },
  };
</script>
<template>
    <section>
      <div class="max-w-[1440px] sm:mx-auto mx-5 sm:py-20 py-10">
        <div class="flex flex-wrap justify-center sm:gap-x-20 gap-10" dir="rtl">
          <div class="sm:max-w-lg">
            <h1 class="text-white sm:text-5xl text-3xl mb-3 leading-snug font-semibold lg:text-start text-center">
              Pertanyaan Untuk Kami
            </h1>
            <p class="text-gray-300 lg:text-start text-center">
              Kami telah merangkum beberapa pertanyaan yang sering diajukan untuk memudahkan Anda mendapatkan informasi terkait kelas, kurikulum, hingga cara mendaftar.
            </p>
          </div>
          <div class="space-y-5" dir="ltr">
            <div v-for="(item, index) in questions" :key="index" class="max-w-2xl border border-gray-700 py-3 px-5 rounded-xl">
              <div @click="toggleAnswer(index)" class="cursor-pointer flex items-center gap-5">
                <h1 class="w-full text-gray-300 font-semibold text-xl">
                  {{ item.question }}
                </h1>
                <i :class="['fas fa-chevron-down text-gray-300 text-lg transform transition-transform duration-300', activeIndex === index ? 'rotate-180' : '']"></i>
              </div>
              <div ref="answers" :style="activeIndex === index ? { height: contentHeights[index] + 'px' } : { height: '0px' }" class="overflow-hidden transition-all duration-300 ease-in-out">
                <hr class="h-px my-3 border-0 bg-gray-600">
                <p class="text-gray-300 tracking-wide">
                  {{ item.answer }}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </template>