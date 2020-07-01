var myDynamicManifest={

    "name":"ecole Universitaire de Technologie",

    "short_name":"sidi bannour",
    "background_color":"#fff",
    "theme_color":"#2fa0aa",
    "display":"standalone",
   }

const stringManifest=JSON.stringify(myDynamicManifest);const blob=new Blob([stringManifest],{type:'application/json'});const manifestURL=URL.createObjectURL(blob);document.querySelector('#website-manifest').setAttribute('href',manifestURL);