let root = window.location.origin;
var res = get(`${root}/places`);
res.then(function (data) {
    data.forEach(function (info) {
        console.log(info);
        var template = "";
        $('.main-content').append(`
        <div style="background-color:white;height:fit-content;padding:10px;min-height:150px;flex-grow:1;">
        <h1>${info.Name}</h1>
        <img style="aspect-ratio:1/1;width:300px;" src = ${info.Image} alt="${info.Name}" />
        <p>${info.Description}</p>
        </div>`
        );

    })
})

$('.apply-filters').click(() => {
    let root = window.location.origin;
    var res = get(`${root}/places`);
    res.then(function (data) {
        data.forEach(function (info) {
            console.log(info);
            var template = "";
            $('.main-content').append(`
        <div style="background-color:white;height:fit-content;padding:10px;min-height:150px;flex-grow:1;">
        <h1>${info.Name}</h1>
        <img style="aspect-ratio:1/1;width:300px;" src = ${info.Image} alt="${info.Name}" />
        <p>${info.Description}</p>
        </div>`
            );

        })
    })
})