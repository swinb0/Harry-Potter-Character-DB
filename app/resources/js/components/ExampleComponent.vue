<template>
    <div class="container">
      <h1>Welcome To The Harry Potter Character Database.</h1>
      <p style="margin-bottom:10px;">Type A Character Name In The Field Below To Learn More About Them!</p>
      <input type="text" :placeholder="placeholder" name="" autofocus @keyup.enter="foo"/>
      <p style="margin-top:10px;" v-if="info.length > 0"> House : {{info[0].house}} </p>
      <p v-if="info.length > 0"> Also Known As : {{info[0].alias}} </p>
      <p v-if="info.length > 0"> Boggart : {{info[0].boggart}} </p>
      <p v-if="info.length > 0"> Patronus : {{info[0].patronus}} </p>
      <p v-if="info.length > 0"> School : {{info[0].school}} </p>
      <p v-if="info.length > 0"> Wand : {{info[0].wand}} </p>
      <form v-if="info.length > 0" @submit.prevent="store">
        <input id="submit" type="submit" value="Save This Character">
      </form>
    </div>
</template>

<script>
    export default {
      data (){
        return {
          key : '$2a$10$ppYffbk2x6p4OCGmUQEcQ.G1M/pHTXDX0xgaTsp2qVebbgFUq9QWq',
          base_url : 'https://www.potterapi.com/v1/',
          placeholder:'',
          info:[],
          sample: [
            "Harry Potter",
            "Tom Riddle",
            "Hermione Granger",
            "Albus Dumbledore",
            "Lucius Malfoy"
          ]
        }
      },
      created(){
        const i = Math.floor(Math.random() * this.sample.length);
        this.placeholder = "What About " + this.sample[i] + "?";
      },
      methods:{
        foo(e){
          this.info = [];
          console.log('fetching..');
          fetch(`${this.base_url}characters/?name=${e.target.value}&key=${this.key}`)
          .then(res => {
            return res.json();
          }).then(this.setResults);
        },
        store() {
          axios.post('api/create', this.info)
            .then(res => {
              console.log(res);
              window.location.href='/view';
            });
        },
        setResults (results) {
          this.info = results;
        }
      }
    }
</script>
<style scoped>
  input{
    padding:5px;
  }
  .container{
    padding:20px;
    box-sizing:border-box;
    border: 2px solid #1476dc;
    border-radius:3px;
    background-color:white;
  }
  input{
    width:100%;
    border:none;
    background-color:whitesmoke;
  }
  p{
    margin-bottom:0;
  }
  #submit{
    margin-top: 10px;
    padding: 5px 15px;
    box-sizing: border-box;
    border: none;
    border-radius: 3px;
    background-color: #1476dc;
    color: white;
    font-weight: 600;
  }
</style>
