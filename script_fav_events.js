$(document).ready(function() {
    // find every third ticket
    $('.ticket:nth-child(3n)').each(function() {
        // create a new ticket container after every third ticket
        var newContainer = $('<div class="ticket-container"></div>');
        $(this).after(newContainer);
        // move the next two tickets to the new container
        $(this).next().appendTo(newContainer);
        $(this).next().appendTo(newContainer);
    });
});