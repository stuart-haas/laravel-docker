<template>
  <Layout>
    <Head title="Welcome" />
    <H1>Welcome</H1>
    <p>Hello User, welcome to your first Inertia app!</p>
  </Layout>
</template>

<script>
  import Layout from '@/Layouts/Default'
  import { Head } from '@inertiajs/inertia-vue3'

  export default {
    components: {
      Head,
      Layout,
    },
    props: {
      user: Object,
    },
  }
</script>