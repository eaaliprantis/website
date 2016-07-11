////////////////////////////////////////////////// UPDATE STATS TABLE
function update() {
	$.get("/stats.php?type=stats", function(data) {
		json = JSON.parse(data)
		$("#stats_servers").html(Number(json.servers).toLocaleString())
		$("#stats_channels").html(Number(json.channels).toLocaleString())
		$("#stats_users").html(Number(json.users).toLocaleString())
		$("#stats_messages").html(Number(json.messages).toLocaleString())
		$("#stats_commands").html(Number(json.commands).toLocaleString())
	})
}

update()
setInterval(update, 10000)
