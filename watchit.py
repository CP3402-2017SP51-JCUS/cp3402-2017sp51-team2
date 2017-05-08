import logging
import time
import subprocess
import sys
from watchdog.observers import Observer
from watchdog.events import LoggingEventHandler
from watchdog.events import FileSystemEventHandler


class DockerHandler(FileSystemEventHandler):
    def __init__(self):
        self.ignorelist = [".git", ".DS_Store"]

    def on_moved(self, event):
        if self.validpath(event):
            super(DockerHandler, self).on_moved(event)
            what = 'directory' if event.is_directory else 'file'
            logging.info("Moved %s: from %s to %s", what, event.src_path, event.dest_path)
            self.react()
        else:
            pass

    def on_created(self, event):
        if self.validpath(event):
            super(DockerHandler, self).on_created(event)
            what = 'directory' if event.is_directory else 'file'
            logging.info("Created %s: %s", what, event.src_path)
            self.react()
        else:
            pass

    def on_deleted(self, event):
        if self.validpath(event):
            super(DockerHandler, self).on_deleted(event)
            what = 'directory' if event.is_directory else 'file'
            logging.info("Deleted %s: %s", what, event.src_path)
            self.react()
        else:
            pass

    def on_modified(self, event):
        if self.validpath(event):
            super(DockerHandler, self).on_modified(event)
            what = 'directory' if event.is_directory else 'file'
            logging.info("Modified %s: %s", what, event.src_path)
            self.react()
        else:
            pass

    def react(self):
        command = "docker cp wp-content wordpress_wordpress_1:/var/www/html/"
        logging.info("Updating file system to docker vm")
        process = subprocess.Popen(command, shell=True, stdout=subprocess.PIPE)
        process.wait()
        logging.info("Command return code : %d", process.returncode)
        logging.info("Event responding completed")

    def validpath(self, event):
        valid = True
        for i in self.ignorelist:
            if i in event.src_path:
                valid = False
                return valid
        return valid

if __name__ == "__main__":
    logging.basicConfig(level=logging.INFO,
                        format='%(asctime)s - %(message)s',
                        datefmt='%Y-%m-%d %H:%M:%S')
    path = sys.argv[1] if len(sys.argv) > 1 else '.'
    #  event_handler = LoggingEventHandler()
    event_handler = DockerHandler()
    observer = Observer()
    observer.schedule(event_handler, path, recursive=True)
    observer.start()
    try:
        while True:
            time.sleep(1)
    except KeyboardInterrupt:
        observer.stop()
    observer.join()
