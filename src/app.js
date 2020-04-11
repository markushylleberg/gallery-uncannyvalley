document.addEventListener('DOMContentLoaded', () => {
    const isJournalPage = (!!document.getElementById("journalContainer"));
    const isVideoRoomPage = (!!document.getElementById("videoroomVideo"));
    const isFrontPage = (!!document.getElementById('catalogModal'));
    const isGalleryPage = (!!document.getElementById('galleryPlatform'));
    
    if (isJournalPage) {
        let loading = true;
        fetch('https://data.uncannyvalley.dk/wp-json/wp/v2/journal')
        .then( (res) => {
            return res.json();
        })
        .then( (data) => {
            data.map( journal => {
                const newEntry = document.createElement('div');

                newEntry.innerHTML = `
                                    <div class="journal-entry">
                                        <h1>${journal.acf.headline}</h1>
                                        <p>${journal.acf.text}</p>
                                        <img class="img-fluid" src="${journal.acf.image}">
                                    </div>`

                document.getElementById('journalContainer').append(newEntry);
            })
            let loading = false;
            if (loading == false) {
                document.getElementById('journalLoader').remove()
            }
        })
    }

    if (isVideoRoomPage) {
        fetch('https://data.uncannyvalley.dk/wp-json/wp/v2/videoroom')
        .then( (res) => {
            return res.json();
        })
        .then( (data) => {
            let newSourceElem = document.createElement('source');

            newSourceElem.setAttribute('id', 'videoroomSource');
            newSourceElem.setAttribute('src', data[0].acf.video.url + '#toolbar=0&navpanes=0&scrollbar=0');
            newSourceElem.setAttribute('type', 'video/mp4');

            document.getElementById('videoroomVideo').appendChild(newSourceElem);
        })
    }

    if (isFrontPage) {
        fetch('https://data.uncannyvalley.dk/wp-json/wp/v2/catalog')
        .then( (res) => {
            return res.json();
        })
        .then( (data) => {
            console.log(data[0].acf.content.url);

            newEmbed = document.createElement('EMBED');
            newEmbed.setAttribute('width', '100%');
            newEmbed.setAttribute('height', '100%');
            newEmbed.setAttribute('src', data[0].acf.content.url + '#toolbar=0');

            document.getElementById('catalogBody').appendChild(newEmbed);
        })
    }

    if (isGalleryPage) {
        fetch('https://data.uncannyvalley.dk/wp-json/wp/v2/gallery')
        .then( (res) => {
            return res.json()
        })
        .then( (data) => {

            // Set design of gallery room
            const innerColor = data[0].acf.inner_background_color;
            const outColor = data[0].acf.outer_background_color;
            const platformImage = data[0].acf.platform_image;
            const pageWrapperGallery = document.querySelector('#galleryPlatform');
            const platformDiv = document.querySelector('.interactive-platform');

            pageWrapperGallery.style.backgroundImage = `radial-gradient(circle, ${innerColor} 0%, ${outColor} 46%, rgb(2, 38, 32) 78%)`;
            platformDiv.style.background = `url(${platformImage}) no-repeat center center`;
            platformDiv.style.backgroundSize = '100% 100%';

            const galleryImageOne = document.getElementById('galleyElementImageOne');
            const galleryImageTwo = document.getElementById('galleryElementImageTwo');
    
            // Set images
            galleryImageOne.setAttribute('src', data[0].acf.element_one_img);
            galleryImageTwo.setAttribute('src', data[0].acf.element_two_img);

            // Create new sources and set videos
            const newSourceOne = document.createElement('source');
            newSourceOne.setAttribute('type', 'video/mp4');
            newSourceOne.setAttribute('src', data[0].acf.element_video_one);
            document.getElementById('galleryVideo0').appendChild(newSourceOne);

            const newSourceTwo = document.createElement('source');
            newSourceTwo.setAttribute('type', 'video/mp4');
            newSourceTwo.setAttribute('src', data[0].acf.element_video_two);
            document.getElementById('galleryVideo1').appendChild(newSourceTwo);

            // Set three drawings
            let arrayOfDrawings = [];

            arrayOfDrawings.push(data[0].acf.drawing_one);
            arrayOfDrawings.push(data[0].acf.drawing_two);
            arrayOfDrawings.push(data[0].acf.drawing_three);

            for( let i = 0; i < arrayOfDrawings.length; i++ ) {
                let drawingDiv = document.createElement('div');
                let modalDiv = document.getElementById('drawingModalBody'+i);

                drawingDiv.classList.toggle('drawing-entry');
                drawingDiv.classList.toggle('col-md-12');
                drawingDiv.classList.toggle('text-center');
                drawingDiv.classList.toggle('col-4');
                drawingDiv.innerHTML = `
                                        <img src="${arrayOfDrawings[i]}" data-toggle="modal" data-target="#drawingModal${i}" alt="Image of drawing">
                                        `;

                document.getElementById('drawingsContainer').appendChild(drawingDiv);
                modalDiv.innerHTML = `
                                    <img src="${arrayOfDrawings[i]}" alt="Image of drawing">
                                    `;
            }

            // Finishing
            let loading = false;
            if (loading == false) {
                document.getElementById('galleryLoader').remove()
            }
        })
    }

})

function journalsZoom() {
    const journals = document.getElementsByClassName('journal-entry');
    for( let i = 0; i < journals.length; i++ ) {
        journals[i].classList.toggle('decrease');
    }
}



// 3D PLATFORM 


