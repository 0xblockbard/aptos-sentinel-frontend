import React from "react";

export function CampaignListPlaceholder() {
  return (
    <div className="w-full mx-auto grid gap-8 lg:grid-cols-3 pb-6">
      {/* Row 1 */}
      {Array.from({ length: 3 }).map((_, idx) => (
        <div key={idx} className="flex flex-col rounded-lg shadow-lg overflow-hidden animate-pulse">
          <div className="flex-shrink-0 relative bg-gray-300 h-72 w-full"></div>
          <div className="flex-1 bg-white pt-3 p-6 flex flex-col justify-between dark:bg-gray-800">
            <div className="flex-1 space-y-4">
              <div className="h-6 bg-gray-300 rounded w-3/4"></div>
              <div className="space-y-2">
                <div className="h-4 bg-gray-300 rounded"></div>
                <div className="h-4 bg-gray-300 rounded w-5/6"></div>
              </div>
            </div>
            <div className="mt-6 flex items-center pt-4 border-t border-gray-200">
              <div className="flex w-full justify-between">
                <div className="h-4 bg-gray-300 rounded w-1/3"></div>
                <div className="h-4 bg-gray-300 rounded w-1/5"></div>
              </div>
            </div>
          </div>
        </div>
      ))}
      
      {/* Row 2 */}
      {Array.from({ length: 3 }).map((_, idx) => (
        <div key={3 + idx} className="flex flex-col rounded-lg shadow-lg overflow-hidden animate-pulse">
          <div className="flex-shrink-0 relative bg-gray-300 h-72 w-full"></div>
          <div className="flex-1 bg-white pt-3 p-6 flex flex-col justify-between dark:bg-gray-800">
            <div className="flex-1 space-y-4">
              <div className="h-6 bg-gray-300 rounded w-3/4"></div>
              <div className="space-y-2">
                <div className="h-4 bg-gray-300 rounded"></div>
                <div className="h-4 bg-gray-300 rounded w-5/6"></div>
              </div>
            </div>
            <div className="mt-6 flex items-center pt-4 border-t border-gray-200">
              <div className="flex w-full justify-between">
                <div className="h-4 bg-gray-300 rounded w-1/3"></div>
                <div className="h-4 bg-gray-300 rounded w-1/5"></div>
              </div>
            </div>
          </div>
        </div>
      ))}
    </div>
  );
}
