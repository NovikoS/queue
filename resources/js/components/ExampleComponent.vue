<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <ol class="card-body">
            <li  v-for="(item) in jobs" :key="item">
              <p>{{ item.data.jobName }}</p>
              <textarea disabled style="width:100%;" rows="30"
                        readonly>{{ JSON.stringify(item.data.mockData,undefined,2) }}
              </textarea>
            <li/>
          </ol>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import {loadData} from '../Api/api'
import {Job} from '../adapter/job'

export default {
  mounted() {
    let jobs = []
    loadData().then((response) => {
      response.data.data.forEach(function (item) {
        jobs.push(new Job(item))
      })
      this.jobs = jobs;
    })
  },
  data() {
    return {
      jobs: []
    }
  },
  methods: {}
}
</script>
