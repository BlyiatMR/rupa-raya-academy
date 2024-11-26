<script>
  export default {
    props: {
      activeSection: {
        type: String,
        required: true
      }
    },
    methods: {
      setActiveSection(section) {
        this.$emit('update:activeSection', section);
      },
      buttonClass(section) {
        return this.activeSection === section
          ? 'w-32 max-sm:w-full text-center border font-semibold bg-blue-600 text-white border-blue-600 rounded-lg py-2 px-3'
          : 'w-32 max-sm:w-full text-center border font-semibold border-gray-300 rounded-lg py-2 px-3 hover:bg-blue-600 hover:text-white hover:border-blue-600 duration-300';
      }
    }
  };
</script>  
<template>
    <div class="text-white flex flex-wrap max-lg:justify-center gap-5 text-lg mb-10">
      <button @click="setActiveSection('penjelasan')" :class="buttonClass('penjelasan')">Penjelasan</button>
      <div class="flex gap-5 max-sm:w-full">
        <button @click="setActiveSection('mentor')" :class="buttonClass('mentor')">Mentor</button>
        <button @click="setActiveSection('suasana')" :class="buttonClass('suasana')">Suasana</button>
      </div>
      <div class="flex gap-5 max-sm:w-full">
        <button @click="setActiveSection('jadwal')" :class="buttonClass('jadwal')">Jadwal</button>
        <button @click="setActiveSection('materi')" :class="buttonClass('materi')">Materi</button>
      </div>
    </div>
</template>