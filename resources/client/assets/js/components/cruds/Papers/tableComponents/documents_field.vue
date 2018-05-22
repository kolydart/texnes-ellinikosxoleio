<template>
    <div v-html="row.documents_link"></div>
</template>


<script>
  export default {
    name: 'DocumentsField',
    props: ['row', 'xprops'],
  }
</script>
