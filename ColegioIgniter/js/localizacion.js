class Localizacion{
    constructor(callback){
        if(navigator.geolocation){
            //obtencion de ubicacion
            navigator.geolocation.getCurrentPosition((position)=> {
                this.latitude = position.coords.latitude;
                this.longitude = position.coords.longitude;

                callback();

            });
        }else{
            alert("Navegador no soporta Geolocalización");
        }
    }
}