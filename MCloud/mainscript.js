const divPrincipal = document.querySelector('#main-div');
const pesquisaInput = document.querySelector('#search-bar');

const bandas = [
  { 
    nome: "Charlie Brown Jr",
    album: [
      {
        titulo: "Transpiração Contínua Prolongada",
        ano: "1997",
        genero: "Skate Punk",
        capa: "https://upload.wikimedia.org/wikipedia/pt/e/eb/Transpira%C3%A7%C3%A3o_cont%C3%ADnua_prolongada.jpg",
        musicas: [
          {
            titulo: "O Coro Vai Comê",
            audio: "musics/OCoroVaiCome.mp3",
          },
          {
            titulo: "Tudo Que Ela Gosta De Escutar",
            audio: "musics/TudoQueElaGostadeeEscutar.mp3"
          },
          {
            titulo: "Sheik",
            audio: "musics/placeholder"
          },
          {
            titulo: "Gimme o Anel",
            audio: "musics/placeholder"
          },
          {
            titulo: "Aquela Paz",
            audio: "musics/Aquela Paz.mp3"
          },
          {
            titulo: "Quinta-Feira",
            audio: "musics/placeholder"
          },
          {
            titulo: "Proibida Pra Mim (Grazon)",
            audio: "musics/ProibidaPraMim.mp3"
          },
          {
            titulo: "Corra Vagabundo",
            audio: "musics/placegolder"
          },
          {
            titulo: "Escalas Tropicais",
            audio: "musics/placeholder"
          },
          {
            titulo: "Charlie Brown Jr",
            audio: "musics/Charlie Brown Jr..mp3"
          }
        ]
      },
      {
        titulo: "100% Charlie Brown Jr. - Abalando a sua Fábrica",
        ano: "2001",
        genero: "Skate Punk",
        capa: "https://upload.wikimedia.org/wikipedia/pt/0/00/100%25_Charlie_Brown_Jr._-_Abalando_a_sua_F%C3%A1brica.jpg",
        musicas: [
            {
                titulo: "Hoje Eu Acordei Feliz",
                audio: "musics/placeholder"
            },
            {
                titulo: "Sino Dourado",
                audio: "musics/placeholder"
            },
            {
                titulo: "Quebra-Mar",
                audio: "musics/placeholder"
            },
            {
                titulo: "Lugar ao Sol",
                audio: "musics/Lugar Ao Sol.mp3"
            },
            {
                titulo: "Só Lazer",
                audio: "musics/placeholder"
            }, 
            {
                titulo: "Como Tudo Deve Ser",
                audio: "musics/ComoTudoDeveSer.mp3"
            }            
        ]
      }

    ]
    
  },{
    nome: "Los Hermanos",
    album: [
      {
        titulo: "Los Hermanos",
        ano: "1999",
        genero: "Rock Nacional",
        capa: "https://upload.wikimedia.org/wikipedia/pt/e/e7/Los_Hermanos_1999_Los_Hermanos.jpg",
        musicas: [
          {
          titulo: "Anna Júlia",
          audio: "musics/AnnaJúlia.mp3"
          }
        ]
      }
    ]
  },
  {
    nome: "Metallica",
    album: [
      {
        titulo: "Master of Puppets",
        ano: "1986",
        genero: "Thrash Metal",
        capa: "https://upload.wikimedia.org/wikipedia/pt/4/4d/Master_of_Puppets.jpg",
        musicas: [
          {
            titulo: "Master of Puppets",
            audio: "musics/MasterofPuppets.mp3"
          }
        ]
      }
    ]
  },
  {
    nome: "Black Sabbath",
    album: [
      {
        titulo: "Paranoid",
        ano: "1970",
        genero: "Heavy Metal",
        capa: "https://roquereverso.com/wp-content/uploads/2020/09/black-sabbath-paranoid.jpg",
        musicas: [
          {
            titulo: "Paranoid",
            audio: "musics/Paranoid.mp3"
          }
        ]
      }
    ]
  },
  {
    nome: "Death",
    album: [
      {
        titulo: "The Sound of Perseverance",
        ano: "1998",
        genero: "Death Metal",
        capa: "https://m.media-amazon.com/images/I/71Vko4w2JeL._UF894,1000_QL80_.jpg",
        musicas: [
          {
            titulo: "Voice of the Soul",
            audio: "musics/VoiceofTheSoul.mp3"
          }
        ]
      }
    ]
  }, {
    nome: "Forfun",
    album: [
        {
            titulo: "Nu",
            ano: "2014",
            genero: "Reggae",
            capa: "https://cdn.awsli.com.br/1369/1369057/produto/55328758/cd-forfun-nu-8a74b400.jpg",
            musicas: [
                {
                    titulo: "O Baile Não Vai Morrer",
                    audio: "musics/placeholder"
                },
                {
                    titulo: "Alforria",
                    audio: "musics/placeholder"
                },
                {
                    titulo: "Mariá",
                    audio: "musics/Mariá.mp3"
                },{
                  titulo: "Arriba y Avante",
                  audio: "musics/ArribayAvante.mp3"
                }
            ]
        },{
          titulo: "Polisenso",
          ano: "2009",
          genero: "Skate Punk",
          capa: "https://cdn-images.dzcdn.net/images/cover/04344e44c8ee37f27f8196103d2bfdce/0x1900-000000-80-0-0.jpg",
          musicas: [
            {
              titulo: "Dia do Alívio",
              audio: "musics/DiadoAlívio.mp3"
            },
            {
              titulo: "Sol ou Chuva",
              audio: "musics/Solouchuva.mp3"
            }
          ]
        }
    ]
  }
];

function mostrarAlbuns (){
    bandas.forEach((banda) =>
    banda.album.forEach((a =>{
        const card = document.createElement('div');
        card.innerHTML = `<img src= '${a.capa}' </img>
                        <h2>${a.titulo}</h2>`
        card.addEventListener('click', () => mostrarMusicas(a))        
        divPrincipal.appendChild(card);
    }) 
))
}  

function mostrarMusicas(a){
    divPrincipal.innerHTML = '';
    a.musicas.forEach(m =>{
    const cardM = document.createElement('div')
    cardM.innerHTML = `<img src = '${a.capa}' </img>
                      <h3>${m.titulo}</h3>  
                      <audio controls>
                        <source src='${m.audio}' type='audio/mpeg'>
                      </audio>`     
    //fazer com q seja possivel so clicar na fotinha da musica e ela já começar a tocar insta com o autoplay lá na tag audio
    
    divPrincipal.appendChild(cardM)
    })    
    const voltar = document.createElement('button');
    voltar.innerText = 'voltar'
    divPrincipal.appendChild(voltar)    
    voltar.addEventListener('click', () =>{
        divPrincipal.innerHTML = ''
        mostrarAlbuns();
    })
}


mostrarAlbuns();