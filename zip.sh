#!/bin/bash

# Get the directory where this script is located
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
PLUGIN_NAME="bookster-license-helper"

# Navigate to parent directory
cd "$SCRIPT_DIR/.."

# Remove existing zip if present
rm -f "${PLUGIN_NAME}.zip"

# Create zip excluding unnecessary files
zip -r "${PLUGIN_NAME}.zip" "$PLUGIN_NAME" \
    -x "${PLUGIN_NAME}/.git/*" \
    -x "${PLUGIN_NAME}/.gitignore" \
    -x "${PLUGIN_NAME}/.vscode/*" \
    -x "${PLUGIN_NAME}/zip.sh" \
    -x "${PLUGIN_NAME}/*.zip" \
    -x "${PLUGIN_NAME}/.DS_Store" \
    -x "*/.DS_Store"

echo "Created ${PLUGIN_NAME}.zip"
