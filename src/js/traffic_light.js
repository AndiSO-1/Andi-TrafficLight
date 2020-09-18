/**
 * Use the state to relocate the page a few seconds
 *
 * @param state
 */
function updateTrafficLight(state){
    const PATH_NEXT_STATE = "/home?next";

    switch(parseInt(state)){
        case 0: // Feu rouge reste 10 secondes
            setTimeout(() => {
                window.location=PATH_NEXT_STATE;
            }, 10000);
            break;
        case 1: case 3: // Feu jaune reste 1 seconde
            setTimeout(() => {
                window.location=PATH_NEXT_STATE;
            }, 1000);
            break;
        case 2: // Feu vert reste 5 secondes
            setTimeout(() => {
                window.location=PATH_NEXT_STATE;
            }, 5000);
            break;
        case 4:
            break;
        default :
            alert("Unknown error\nCan't auto-refresh the page...");
            break;
    }
}