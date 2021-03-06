<title>{$lang['Calendar']}
{if {$_CONF['info_row']['allowed_powered']} == 1}
- {$lang['powered']}
{/if}</title>
<?php
$_COOKIE['jscolor'] = $PowerBB->functions->CleanVariable($_COOKIE['jscolor'],'sql');
$_COOKIE['jscolor'] = $PowerBB->functions->CleanVariable($_COOKIE['jscolor'],'html');
?>
<style>
#calendar th{
background-color: <?php echo $_COOKIE['jscolor'];?>;
}
</style>
<?php $defaultDate = date('Y-m-d');?>
<link href="./applications/core/calendar/fullcalendar.css" rel="stylesheet" />
<script src="./applications/core/calendar/lib/moment.min.js"></script>
<script src="./applications/core/calendar/fullcalendar.min.js"></script>
<script src="./applications/core/calendar/lang/{$_CONF['info_row']['content_language']}.js"></script>
<script type="text/javascript">
$(document).ready(function() {

$('#calendar').fullCalendar({
theme: false,
lang: '{$_CONF['info_row']['content_language']}',
header: {
left: 'prev,next today',
center: 'title',
right: 'month,agendaWeek,agendaDay'
},
defaultDate: '<?php echo $defaultDate; ?>',
editable: true,
eventLimit: false, // allow "more" link when too many events

events: [
{
eventColor: '#378006',
title: 'All Day Event',
start: '2015-02-01'
},
{
title: 'Long Event',
start: '2015-02-07',
end: '2015-02-10'
},
{
id: 999,
title: 'Repeating Event',
start: '2015-02-09T16:00:00'
},
{
id: 999,
title: 'Repeating Event',
start: '2015-02-16T16:00:00'
},
{
title: 'Conference',
start: '2015-02-11',
end: '2015-02-13'
},
{
title: 'Meeting',
start: '2015-02-12T10:30:00',
end: '2015-02-12T12:30:00'
},
{
title: 'Lunch',
start: '2015-02-12T12:00:00'
},
{
title: 'Meeting',
start: '2015-02-12T14:30:00'
},
{
title: 'Happy Hour',
start: '2015-02-12T17:30:00'
},
{
title: 'Dinner',
start: '2015-02-12T20:00:00'
},
{
title: 'Birthday Party',
start: '2015-02-13T07:00:00'
},
{
title: 'Click for Google',
url: 'http://google.com/',
start: '2015-02-28'
}
]

});

});
</script>

<div id='calendar'></div>

<br />
<br />
