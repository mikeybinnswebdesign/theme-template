import "../scss/style.scss";

// JS
// Import your JS functions here from modules
import { output_message } from "./modules/hello-world-message";

wp.domReady(function () {
	// JS functions go here
	output_message();
});
