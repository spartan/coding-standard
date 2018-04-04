#!/usr/bin/env bash

#
# Install Spartan Coding Standard globally
# You might need `sudo`
#
phpcs --config-set installed_paths $(pwd)/../src/Spartan
