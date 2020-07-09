<template>
  <div class>
    <div
      v-for="(article, index) in articles"
      class="mx-auto max-w-xl shadow-md border rounded p-2 my-2"
      :key="index"
    >
      <h1 class="text-xl text-center mb-2">{{ article.title }}</h1>
      <p class="text-lg break-words p-2">{{ article.body }}</p>

      <div class="flex flex-row mt-2 justify-between">
        <p>{{ article.user }}</p>
        <p>{{ article.date }}</p>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      articles: []
    };
  },
  methods: {
    getArticles: function() {
      axios
        .get("/articles")
        .then(res => {
          console.log(res.data);

          res.data.forEach((element, i) => {
            this.articles[i] = {
              id: element.id,
              title: element.title,
              body: element.body,
              user: element.user_id,
              date: element.created_at
            };

            this.$forceUpdate();
          });
        })
        .catch(err => console.log(err));
    }
  },
  created() {
    this.getArticles();
  }
};
</script>

<style>
</style>