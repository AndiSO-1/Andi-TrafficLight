/**
 * Send to another page after a moment
 *
 * @param path
 * @param time -> in seconds
 */
function sendToPage(path, time)
{
    setTimeout(() => {
        window.location=path;
    }, parseInt(time) * 1000);
}