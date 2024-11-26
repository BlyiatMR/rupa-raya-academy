<script>
export default {
  data() {
    return {
      images: [
        { src: "/images/3darchitectural-class/3darchitectural-img-1.jpg", alt: "3D Architectural Image 1" },
        { src: "/images/3darchitectural-class/3darchitectural-img-2.jpg", alt: "3D Architectural Image 2" },
        { src: "/images/3darchitectural-class/3darchitectural-img-3.jpg", alt: "3D Architectural Image 3" },
      ],
    };
  },
};
</script>
<template>
    <div class="space-y-7">
        <h1 class="text-3xl tracking-wide text-white font-semibold">Suasana Kelas</h1>
        <hr class="h-px my-8 border-0 bg-gray-600">
        <p class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">Dengan suasana yang kolaboratif, peserta diajak untuk berinteraksi, berbagi ide, dan memecahkan masalah bersama.</p>
        <div class="flex flex-wrap justify-center gap-5">
            <div v-for="(image, index) in images" :key="index" class="relative overflow-hidden w-64 h-60 rounded-lg">
              <img class="object-cover scale-150" :src="image.src" :alt="image.alt" />
            </div>
        </div>
    </div>
</template>