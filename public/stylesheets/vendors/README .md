# Vendors

Most projects will ned to have 'vendors/' folder containing all the CSS files from external libraries and frameworks. - Normalize, Bootstrap, jQuery etc. Putting those aside in the same folder is a good way to know which code is not your buissness to deal with.

If you have to override a section of any vendor it is good practice to create an 8th folder called 'vendors-extensions/' and there you can have files named exactly after the vendors that they overwrite. For example, 'vendors-extension/_bootstrap.sccs' is the file that contains all the CSS rules that overwrite some of Bootstrap's default rules. It is a better practice to avoid editing the vendor files themselves.