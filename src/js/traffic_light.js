function updateTrafficLight(state){
    var path_next_state = "/home?next";

    switch(parseInt(state)){ // 10 1 5
        case 0:
            setTimeout(() => {
                window.location=path_next_state;
            }, 10000);
            break;
        case 1: case 3:
            setTimeout(() => {
                window.location=path_next_state;
            }, 1000);
            break;
        case 2:
            setTimeout(() => {
                window.location=path_next_state;
            }, 5000);
            break;
        case 4:
            break;
        default :
            alert("Unknown error\nCan't auto-refresh the page...");
            break;
    }
}