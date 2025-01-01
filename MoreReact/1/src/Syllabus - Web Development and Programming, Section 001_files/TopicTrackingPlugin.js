TopicTrackingPlugin = {
    Plugin: function (host) {

        let _stopTrackingFunc = null;

        function stopTracking() {
            if (!_stopTrackingFunc) {
                return;
            }
            _stopTrackingFunc();
            window.removeEventListener('beforeunload', _stopTrackingFunc);
            window.removeEventListener('pagehide', _stopTrackingFunc);
            window.removeEventListener('unload', _stopTrackingFunc);
            _stopTrackingFunc = null;
        }

        function startTracking(finishedViewingUrl) {
            stopTracking();

            let alreadyHandled = false;
            _stopTrackingFunc = function () {
				if ( alreadyHandled ) {
					return;
				}

				alreadyHandled = true;
                
                if ( navigator.sendBeacon ) {
                    var formData = new FormData();
                    formData.append( D2L.LP.Web.Authentication.Xsrf.GetXsrfTokenParameterName(), D2L.LP.Web.Authentication.Xsrf.GetXsrfToken() );
        
                    const response = navigator.sendBeacon( finishedViewingUrl, formData );

                    if (!response) {
                        throw new Error( 'Failed to update topic view duration' );
                    }
                } else {
                    // IE11 support
                    D2L.LP.Web.UI.Rpc.Connect(
                        D2L.LP.Web.UI.Rpc.Verbs.POST,
                        finishedViewingUrl
                    );
                }

            }

            window.addEventListener('beforeunload', _stopTrackingFunc);
            window.addEventListener('pagehide', _stopTrackingFunc);
            window.addEventListener('unload', _stopTrackingFunc);
        }

        host.registerService('topicTracking', '0.1', {
            startTracking: startTracking,
            stopTracking: stopTracking
        });
    }
};
