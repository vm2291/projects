LessonsDialogCommsPlugin = {

	PluginData: undefined,

	Plugin: function (host) {

		function setData( data ) {
			window.LessonsDialogCommsPlugin.PluginData = data;
		}

		function clearData() {
			window.LessonsDialogCommsPlugin.PluginData = undefined;
		}

		function receiveData() {
			return window.parent.LessonsDialogCommsPlugin.PluginData;
		}

		host.registerService('lessonsDialogComms', '0.1', {
			setData: setData,
			clearData: clearData,
			receiveData: receiveData
		});
	}

};
