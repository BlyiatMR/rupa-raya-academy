<script>
export default {
  data() {
    return {
      sections: [
        {
          title: "Dasar 3D Modelling",
          items: [
            "Pengenalan Blender",
            "Instalasi dan Persiapan Proyek",
            "Navigasi Blender",
          ],
        },
        {
          title: "Dasar-Dasar Modelling",
          items: [
            "Objek Dasar",
            "Transformasi",
            "Mode Editing",
            "Extrude & Subdivide",
            "Sculpting Dasar",
          ],
        },
        {
          title: "Texturing dan Material",
          items: [
            "UV Unwrapping",
            "Material Editor",
            "Pengenalan PBR (Physically Based Rendering)",
          ],
        },
        {
          title: "Studi Kasus",
          items: [
            "Modelling Interior",
            "Modelling Eksterior",
            "Modelling Produk",
            "Portfolio",
          ],
        }
      ],
    };
  },
};
</script>
<template>
    <div class="space-y-7">
        <h1 class="text-3xl tracking-wide text-white font-semibold">Materi Kelas</h1>
        <hr class="h-px my-8 border-0 bg-gray-600">
        <div v-for="(section, index) in sections" :key="index" class="space-y-1">
            <p class="tracking-wider leading-normal text-white sm:text-lg text-base font-bold">{{ section.title }}</p>
            <p v-for="(item, itemIndex) in section.items" :key="itemIndex" class="tracking-wider leading-normal text-gray-300 sm:text-lg text-base">- {{ item }}</p>
        </div>
    </div>
</template>