let family = [
    {
    name: "Lisa",
    mail: "lisa.simpson@gmail.com"
    },
    {
    name: "Bart" ,
    mail: "bart.simpson@gmail.com"
    },
    {
    name: "Maggie" ,
    mail: "maggie.simpson@gmail.com"
    }];

    let addKids = kid => {
        return (
        `<div class="contacts">
            <div class="contact">
                <div class="contact__photo">
                 <div class="photo">
                    <img class="photo__img" src="img/${kid.name.toLowerCase()}.jpg" alt="${kid.name[0]}" />
                 </div>
             </div>
            <div class="contact__info">
              <p><strong>Name:</strong>${kid.name} Simpson</p>
              <p><strong>E-mail:</strong> ${kid.mail}</p>
            </div>
        </div>` )
    };

document.addEventListener('DOMContentLoaded', () => {
    const baby = document.querySelector(".contacts");
    for(let kids of family) {
        baby.innerHTML += addKids(kids);
    }
});
