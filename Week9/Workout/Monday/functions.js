const load_actor = (actor_id) => {

    fetch('https://classes.codingbootcamp.cz/assets/classes/workouts/actor-o-matic/actor/' + actor_id, {
        method: 'GET'
    })
    .then((response) => {
        return response.json(); //  parsing the response as JSON
    })
    .then((data) => {
        let name = document.querySelector('.name');
        name.innerHTML = data.name;
        let movies = document.querySelector('.movies-total .data');
        movies.innerHTML = data.movies_total;
        console.log(data);
    })
}

const load_ratings = (actor_id) => {
    fetch('https://classes.codingbootcamp.cz/assets/classes/workouts/actor-o-matic/actor/'+actor_id+'/ratings' , {
        method: 'GET'
    })
    .then(response => response.json())
    .then(data => {
        lineChart('ratings-data',data);
    });
}

const load_genres = actor_id => {
    fetch('https://classes.codingbootcamp.cz/assets/classes/workouts/actor-o-matic/actor/'+actor_id+'/genres' , {
        method: 'GET'
    })
    .then(response => response.json())
    .then(data => {
        pieChart('genres-data',data);
    });
}

let bruce = document.querySelector('.him');
let salma = document.querySelector('.her');

bruce.addEventListener('click' , () => {
    load_actor(22616);
    load_ratings(22616);
    load_genres(22616);
})

salma.addEventListener('click' , () => {
    load_actor(19302);
    load_ratings(19302);
    load_genres(19302);
})