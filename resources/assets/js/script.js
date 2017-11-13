
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

$('#particles').particleground({
    dotColor: '#7F8F91',
    lineColor: '#4B5255',
    parallax: true,
    parallaxMultiplier: 20
});

$('a').each(() => {
    $(this).tooltip({placement: 'top'});
});

$('#devicon-hover').each(() => {
    $(this).tooltip({placement: 'bottom'});
});