<template>
  <div class="mx-auto max-w-xl">
    <form class="mx-auto shadow-md border rounded flex flex-col" action @submit.prevent="postArticle">
      <div class="flex flex-col p-2">
        <label class="ml-3 text-2xl" for="title">Title:</label>
        <input class="p-3 mx-3 my-1 border-2" type="text" name="title" id v-model="title" />
      </div>

      <div class="flex flex-col p-2">
        <label class="ml-3 text-2xl" for="title">Enter Article:</label>
        <textarea class="p-3 mx-3 my-1 border-2" type="textarea" name="body" id v-model="body"></textarea>
      </div>

      <input
        class="mx-auto bg-red-700 text-white text-center text-xl p-2 mb-4 rounded border-0 shadow-md cursor-pointer"
        type="submit"
        value="Submit"
      />
    </form>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  data() {
    return {
      title: "",
      body: ""
    };
  },
  methods: {
    postArticle: function() {
      axios
        .post("/articles", {
          title: this.title,
          body: this.body
        })
        .then(res => {
          console.log(res);
        })
        .catch(err => {
          console.log(err);
        });
    }
  },
  mounted() {
  }
};
</script>

<style>
</style>